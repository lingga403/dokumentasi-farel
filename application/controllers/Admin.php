<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');

	/**
	 * 
	 */
	class Admin extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			if (!$this->session->has_userdata('status')) {
				redirect('login');
			}else if($this->session->userdata('divisi') =='Kasatker'){
				redirect('kasatker');
			}
			else if($this->session->userdata('bagian') =='PPK'){
				redirect('ppk1');
			}
		}

		public function index () 
		{
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$data['jmluser'] = $this->Datauser_model->JumlahUser();
			$data['jmlppk'] = $this->Datappk_model->JumlahPPK();
			$this->load->view('admin/dashboard' , $data);
			$this->load->view('admin/footer');
		}

		public function inputkasatker ()
		{
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/inputkasatker');
			$this->load->view('admin/footer1');
		}

		public function daftarkasatker ()
		{
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/daftarkasatker');
			$this->load->view('admin/footer1');
		}

		public function daftaruser () 
		{
			$this->load->view('admin/header');
			$data['user'] = $this->Datauser_model->datauser();
			$this->load->view('admin/sidebar');
			$this->load->view('admin/daftaruser', $data);
			$this->load->view('admin/footer1');
		}

		public function daftarppk () 
		{
			$this->load->view('admin/header');
			$data['get_ppk']=$this->Datappk_model->datappk();
			$this->load->view('admin/sidebar');
			$this->load->view('admin/daftarppk', $data);
			$this->load->view('admin/footer1');
		}
		public function inputppk ()
		{
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/inputppk');
			$this->load->view('admin/footer1');
		}		
		public function inputtahun ()
		{
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/inputtahun');
			$this->load->view('admin/footer1');	
		}
		public function createuser ()
		{
			$this->load->view('admin/header');
			$data = array ('get_ppk' => $this->Datappk_model->datappk());
			$this->load->view('admin/sidebar');
			$this->load->view('admin/createuser',$data);
			$this->load->view('admin/footer1');
		}
		public function profile ()
		{
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/profile');
			$this->load->view('admin/footer1');
		}
		public function changepassword ()
		{
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/changepassword');
			$this->load->view('admin/footer1');
		}
		// Fungsi Tambah Akun PPK
		public function TambahAkun ()
		{
			$this->form_validation->set_rules('nip', 'NIP' ,'trim|required|numeric|max_length[12]');
			$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
			$this->form_validation->set_rules('divisi', 'Divisi' , 'required');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
			$this->form_validation->set_rules('username','Username', 'required');
			$this->form_validation->set_rules('password','Password' ,'trim|required|min_length[8]|alpha_numeric');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('admin/header');
				$this->load->view('admin/sidebar');
				$this->load->view('admin/createuser');
				$this->load->view('admin/footer1');
			}
			else {
				$nip 		= $this->input->post('nip');
				$nama 		= $this->input->post('nama');
				$divisi 	= $this->input->post('divisi');
				$email 		= $this->input->post('email');
				$alamat 	= $this->input->post('alamat');
				$username   = $this->input->post('username');
				$password 	= $this->input->post('password');
				$data = array
				(
					'id_user'		=> $this->Penomoran_model->IDDaftar(),
					'nip'			=> $nip,
					'nama'			=> $nama,
					'divisi'		=> $divisi,
					'email'			=> $email,
					'alamat'		=> $alamat,
					'username'		=> $username,
					'password'		=> md5($password),
					'foto'			=> "user1.jpg"
				);
				$resultchecknip = $this->Datauser_model->ceknipuser($nip);
				if ($resultchecknip > 0) {
					$this->session->set_flashdata('nipsalah','true');
					redirect('admin/createuser');
				}
				else {
					$input = $this->Datauser_model->Tambahuser($data,'user');
					if ($input > 0) {
						$this->session->set_flashdata('berhasil','true');
						redirect(base_url('admin/createuser'));
					}
					else{
						$this->session->set_flashdata('gagal','true');
						redirect(base_url('admin/createuser'));
					}			
				}
			}			
		}

		//Fungsi Tambah PPK
		public function TambahPPK()
		{
			$this->form_validation->set_rules('nama', 'Nama PPK', 'trim|required');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('admin/header');
				$this->load->view('admin/sidebar');
				$this->load->view('admin/inputppk');
				$this->load->view('admin/footer1');
			}
			else {
				$nama       = $this->input->post('nama');
				$keterangan = $this->input->post('keterangan');
				$data = array (
					'id_ppk' 	 => $this->Penomoran_model->IDPPK(),
					'nama'		 => $nama,
					'keterangan' => $keterangan
				);
				$input = $this->Datappk_model->Tambahppk($data,'ppk');
					if ($input > 0) {
						$this->session->set_flashdata('berhasil','true');
						redirect(base_url('admin/inputppk'));
					}
					else{
						$this->session->set_flashdata('gagal','true');
						redirect(base_url('admin/inputppk'));
					}			
			}
		}
		//Fungsi Edit PPK
		public function editppk ($id_ppk)
		{
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$data = array ('get_ppk' => $this->Datappk_model->datappk());
			$ppk = $this->Datappk_model->GetWherePPK("where id_ppk ='$id_ppk'");
			$data = array (
				"id_ppk" => $ppk[0]['id_ppk'],
				"nama" => $ppk[0]['nama'],
				"keterangan" => $ppk[0]['keterangan'],
			);
			$this->load->view('admin/editppk', $data);
			$this->load->view('admin/footer1');
		}
		//Fungsi Update PPK
		public function updateppk ()
		{
			$id_ppk 	= $this->input->post('id_ppk');
			$nama    	= $this->input->post('nama');
			$keterangan = $this->input->post('keterangan');

			$data_update = array (
				'id_ppk' 	 => $id_ppk,
				'nama' 	 	 => $nama,
				'keterangan' => $keterangan
			);
			$where = array ('id_ppk' => $id_ppk);
			$result = $this->Datappk_model->UpdateDataPPK('ppk', $data_update, $where);

			if ($result > 0) {
				$this->session->set_flashdata('updateberhasil','true');
				redirect('admin/daftarppk');
			}
			else {
				$this->session->set_flashdata('updategagal','true');
				redirect('admin/daftarppk');
			}
		}

		public function hapusppk ($id_ppk)
		{
			$where = array ('id_ppk' =>$id_ppk);
			$result = $this->Datappk_model->hapusppk($where, 'ppk');
			$this->session->set_flashdata('deleteberhasil','true');
			redirect(base_url('admin/daftarppk'));
			
		}

		//----- User-------
		//Amil data & Edit User
		public function edituser ($id_user)
		{
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$data['user'] = $this->Datauser_model->GetWhereUser($id_user);
			$data['get_ppk']=$this->Datappk_model->datappk();
			// $data = array (
			// 	"id_user" 	=> $user[0]['id_user'],
			// 	"nama"	  	=> $user[0]['nama'],
			// 	"NIP"	  	=> $user[0]['NIP'],
			// 	"divisi"	=> $user[0]['divisi'],
			// 	"email"		=> $user[0]['email'],
			// 	"username"	=> $user[0]['username']
			// );


			$this->load->view('admin/edituser',$data);
			$this->load->view('admin/footer1');
		}
		//Fungsi Update PPK
		public function updateuser ()
		{
			$id_user 	= $this->input->post('id_user');
			$NIP    	= $this->input->post('NIP');
			$nama    	= $this->input->post('nama');
			$divisi    	= $this->input->post('divisi');
			$email    	= $this->input->post('email');
			$username 	= $this->input->post('username');

			$data_update = array (
				'id_user'	 =>$id_user,
				'NIP'		 => $NIP,
				'nama' 	 	 => $nama,
				'divisi' 	 => $divisi,
				'email' 	 => $email,
				'username'   => $username
			);
			
			$result = $this->Datauser_model->UpdateDataUser($data_update, $id_user);

			if ($result > 0) {
				$this->session->set_flashdata('updateberhasil','true');
				redirect('admin/daftaruser');
			}
			else {
				$this->session->set_flashdata('updategagal','true');
				redirect('admin/daftaruser');
			}
		}

	}
?>