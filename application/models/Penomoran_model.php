<?php 
 defined('BASEPATH') OR exit('No direct scrit access allowed');

 /**
  * 
  */
 class Penomoran_model extends CI_Model
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 	}

 	// Penomoran ID Akun
 	public function IDDaftar ()
 	{
 		$this->db->select("RIGHT(id_user,4) AS kode ");
        $this->db->order_by('id_user', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('user');
        if($query->num_rows()>0){
            $data = $query->row();
            $kode = intval($data->kode)+1;
        }
        else{
            $kode = 1;
        }
        $kodemax = str_pad($kode,4,"0",STR_PAD_LEFT);
        $kodejadi  = "USR".$kodemax;
        return $kodejadi;
 	}

 	//Penomoran ID PPK
 	public function IDPPK ()
 	{
 		$this->db->select("RIGHT(id_ppk,4) AS kode");
 		$this->db->order_by('id_ppk' , 'DESC');
 		$this->db->limit(1);
 		$query = $this->db->get('ppk');
 		if ($query->num_rows()>0) {
 			$data = $query->row();
 			$kode = intval($data->kode)+1;
 		}
 		else {
 			$kode = 1;
 		}
 		$kodemax  = str_pad($kode,4 ,"0", STR_PAD_LEFT);
 		$kodejadi = "PPK".$kodemax;
 		return $kodejadi; 
 	}
    // Penomoran ID Tahun
    public function IDTahun ()
    {
        $this->db->select("RIGHT(id_tahun,4) AS kode");
        $this->db->order_by('id_tahun' , 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('tbl_tahun');
        if ($query->num_rows()>0) {
            $data = $query->row();
            $kode = intval($data->kode)+1;
        }
        else {
            $kode = 1;
        }
        $kodemax  = str_pad($kode,4 ,"0", STR_PAD_LEFT);
        $kodejadi = "THN".$kodemax;
        return $kodejadi; 
    }
 }
 ?>