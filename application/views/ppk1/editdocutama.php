<main class="main-wrapper clearfix">
	<!-- Page Title Area -->
	<div class="row page-title clearfix">
		<div class="page-title-left">
			<h6 class="page-title-heading mr-0 mr-r-5">Dokumen Utama</h6>
			<span class="text-muted"><?php echo $show[0]['nama_paket']; ?></span>
		</div>
		<!-- /.page-title-left -->
		<div class="page-title-right d-none d-sm-inline-flex">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="<?php echo base_url('admin') ?>">Dashboard</a>
				</li>
				<li class="breadcrumb-item active">Edit Dokumen</li>
			</ol>
		</div>
		<!-- /.page-title-right -->
	</div>
	<!-- /.page-title -->
	<!-- =================================== -->
	<!-- Different data widgets ============ -->
	<!-- =================================== -->
	<form action="<?php echo site_url('ppk1/updatedocutama') ?>" method="post" enctype="multipart/form-data" id="interviewForm">
		<div class="widget-list">
			<div class="col-md-12 widget-holder">
				<div class="widget-bg">
					<div class="widget-body clearfix">
						<div class="row">
							<div class="col-md-11">
								<h4 class="box-title mr-b-0" >Kelompok 1</h4>
							</div>
							<div class="col-1 btn btn-primary">
								<a href="<?php echo site_url('ppk1/viewdocutama/' . $show[0]['id_paket']) ?>" class="text-white">Lihat</a>
							</div>
						</div>

						<div class="row">
							<div class="form-group col-md-6">
								<label for="surat_md" class="form-control-label text-blue">Surat Minat Daerah</label>
                                        <input type="hidden" value="<?php echo $show[0]['id_paket'] ?>" name="id_paket">
								<p>
									<button class="btn btn-show" data-toggle="modal" data-target="#modalCustom" type="button" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc1->surat_md) ?>">
										<i class="feather feather-eye text-dark"></i>
										<input type="hidden" value="<?= $doc1->surat_md ?>" name="delf1">
									</button>
									<?php echo $doc1->surat_md ?>
								</p>
								<div class="btn btn-primary" style="position: relative;overflow: hidden;">
									Perbaharui
									<input type="file" name="file1" style="position: absolute;font-size: 50px;opacity: 0;right: 0;top: 0;" accept="application/pdf">
								</div>
							</div>
							<div class="form-group col-md-6">
								<label for="surat_mh" class="form-control-label text-blue">Surat Menerima Hibah</label>
								<p><?php echo $doc1->surat_mh ?>
									<button class="btn btn-show" data-toggle="modal" data-target="#modalCustom" type="button" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc1->surat_mh) ?>">
										<i class="feather feather-eye text-dark"></i>
										<input type="hidden" value="<?= $doc1->surat_mh ?>" name="delf2">
									</button>
								</p>
								<div class="btn btn-primary" style="position: relative;overflow: hidden;">
									Perbaharui
									<input type="file" name="file2" style="position: absolute;font-size: 50px;opacity: 0;right: 0;top: 0;" accept="application/pdf">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="form-group col-md-6">
								<label for="surat_kl" class="form-control-label text-blue">Surat Kesiapan Lahan</label>
								<p><?php echo $doc1->surat_kl ?>
									<button class="btn btn-show" data-toggle="modal" data-target="#modalCustom" type="button" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc1->surat_kl) ?>">
										<i class="feather feather-eye text-dark"></i>
										<input type="hidden" value="<?= $doc1->surat_kl ?>" name="delf3">
									</button>
								</p>
								<div class="btn btn-primary" style="position: relative;overflow: hidden;">
									Perbaharui
									<input type="file" name="file3" style="position: absolute;font-size: 50px;opacity: 0;right: 0;top: 0;" accept="application/pdf">
								</div>
							</div>
							<div class="form-group col-md-6">
								<label for="kesepakatan_bersama" class="form-control-label text-blue">Kesepakatan Bersama (KSB)</label>
								<p><?php echo $doc1->kesepakatan_bersama ?>
									<button class="btn btn-show" data-toggle="modal" data-target="#modalCustom" type="button" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc1->kesepakatan_bersama) ?>">
										<i class="feather feather-eye text-dark"></i>
										<input type="hidden" value="<?= $doc1->kesepakatan_bersama ?>" name="delf4">
									</button>
								</p>
								<div class="btn btn-primary" style="position: relative;overflow: hidden;">
									Perbaharui
									<input type="file" name="file4" style="position: absolute;font-size: 50px;opacity: 0;right: 0;top: 0;" accept="application/pdf">
								</div>
							</div>
							<div class="form-group col-md-6">
								<label for="perjanjian_kerjasama" class="form-control-label text-blue">Perjanjian Kerja Sama</label>
                                        <input type="hidden" value="<?php echo $doc1->perjanjian_kerjasama ?>" name="delf5">
								<p><?php echo $doc1->perjanjian_kerjasama ?>
									<button class="btn btn-show" data-toggle="modal" data-target="#modalCustom" type="button" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc1->perjanjian_kerjasama) ?>">
										<i class="feather feather-eye text-dark"></i>
										<input type="hidden" value="<?= $doc1->perjanjian_kerjasama ?>">
									</button>
								</p>
								<div class="btn btn-primary" style="position: relative;overflow: hidden;">
									Perbaharui
									<input type="file" name="file5" style="position: absolute;font-size: 50px;opacity: 0;right: 0;top: 0;" accept="application/pdf">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="widget-list">
			<div class="col-md-12 widget-holder">
				<div class="widget-bg">
					<div class="widget-body clearfix">
						<h4 class="box-title mr-b-0">Kelompok 2</h4><br>
						<div class="row">
							<div class="form-group col-md-6">
								<label for="sppbj" class="form-control-label text-blue">SPBJ</label>
								<p><?php echo $doc1->sppbj ?>
									<button class="btn btn-show" data-toggle="modal" data-target="#modalCustom" type="button" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc1->sppbj) ?>">
										<i class="feather feather-eye text-dark"></i>
										<input type="hidden" value="<?= $doc1->sppbj ?>" name="delf6">
									</button>
								</p>
								<div class="btn btn-primary" style="position: relative;overflow: hidden;">
									Perbaharui
									<input type="file" name="file6" style="position: absolute;font-size: 50px;opacity: 0;right: 0;top: 0;" accept="application/pdf">
								</div>
							</div>
							<div class="form-group col-md-6">
	                            <label class="form-control-label text-blue" for="spmk">SPMK</label>
	                            <p><?php echo $doc1->spmk ?>
		                            <button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" type="button" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc1->spmk) ?>">
		                                <i class="feather feather-eye text-dark"></i>
		                                <input type="hidden" value="<?= $doc1->spmk ?>" name="delf7">
		                            </button>
	                        	</p>
	                        	<div class="btn btn-primary" style="position: relative;overflow: hidden;">
									Perbaharui
									<input type="file" name="file7" style="position: absolute;font-size: 50px;opacity: 0;right: 0;top: 0;" accept="application/pdf">
								</div>
	                        </div>
						</div>

						<div class="row">
							<div class="form-group col-md-6">
								<label for="naskah_kontrak" class="form-control-label text-blue">Naskah Kontrak</label>
								<p><?php echo $doc1->naskah_kontrak ?>
									<button class="btn btn-show" data-toggle="modal" data-target="#modalCustom" type="button" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc1->naskah_kontrak) ?>">
										<i class="feather feather-eye text-dark"></i>
										<input type="hidden" value="<?= $doc1->naskah_kontrak ?>" name="delf8">
									</button>
								</p>
								<div class="btn btn-primary" style="position: relative;overflow: hidden;">
									Perbaharui
									<input type="file" name="file8" style="position: absolute;font-size: 50px;opacity: 0;right: 0;top: 0;" accept="application/pdf">
								</div>
							</div>
							<div class="form-group col-md-6">
	                            <label class="form-control-label text-blue" for="rencana_mk">Rencana Mutu Kontrak</label>
	                            <p><?php echo $doc1->rencana_mk ?>
		                            <button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" type="button" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc1->rencana_mk) ?>">
		                                <i class="feather feather-eye text-dark"></i>
		                                <input type="hidden" value="<?= $doc1->rencana_mk ?>" name="delf8">
		                            </button>
	                        	</p>
	                        	<div class="btn btn-primary" style="position: relative;overflow: hidden;">
									Perbaharui
									<input type="file" name="file8" style="position: absolute;font-size: 50px;opacity: 0;right: 0;top: 0;" accept="application/pdf">
								</div>
	                        </div>
						</div>
						<div class="row">
							<div class="form-group col-md-6">
								<label for="bcp" class="form-control-label text-blue">Berita acara Pre-Construction</label>
								<p><?php echo $doc1->bcp ?>
									<button class="btn btn-show" data-toggle="modal" data-target="#modalCustom" type="button" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc1->bcp) ?>">
										<i class="feather feather-eye text-dark"></i>
										<input type="hidden" value="<?= $doc1->bcp ?>" name="delf9">
									</button>
								</p>
								<div class="btn btn-primary" style="position: relative;overflow: hidden;">
									Perbaharui
									<input type="file" name="file9" style="position: absolute;font-size: 50px;opacity: 0;right: 0;top: 0;" accept="application/pdf">
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
        <div class="row">
			<div class="col-md-12">
			<button class="btn btn-success btn-block" type="submit">Save Update</button>
			</div>
		</div>

	</form>
    <!-- Modal -->
	<div class="modal fade" id="modalCustom" role="dialog">
    		<div class="modal-dialog modal-lg">
    			<div class="modal-content">
    				<div class="modal-header">
                    	<button type="button" class="close" data-dismiss="modal">&times;</button>
	                    <h4 class="modal-title"></h4>
	               </div>
	               <div class="modal-body">
	                    <embed src="ucup" width="100%" height="500px">
	               </div>
	               <div class="modal-footer">
	               	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	               </div>
	          </div>
	     </div>
	</div>
	<!-- Modal -->



 </main>
<!-- /.widget-list -->
<script type="text/javascript">
    $(document).ready(function() {
        $('#interviewForm')
        .find('input[type="checkbox"][name="topic1"]')
        .on('change', function() {
            $container = $('[data-topic="addendumii"]');
            $container.toggle();
            });
    });
    $(document).ready(function() {
        $('#interviewForm')
        .find('input[type="checkbox"][name="topic2"]')
        .on('change', function() {
            var topic      = $(this).val(),
            $container = $('[data-topic="addendumiii"]');
            $container.toggle();
            });
    });
    $(document).ready(function() {
        $('#interviewForm')
        .find('input[type="checkbox"][name="topic3"]')
        .on('change', function() {
            $container = $('[data-topic="addendumiv"]');
            $container.toggle();
            });
    });
    $(".btn-show").click(function() {
        var value = $(this).val()
        var value2 = $(this).find("input").val()
        if (value2 == "" ) {
            $("#modalCustom .modal-body").find("embed").hide()
        $("#modalCustom .modal-header .modal-title").html("no data")
                        }
        else{
            $("#modalCustom .modal-body").find("embed").show()
        var a = $("#modalCustom .modal-body").find("embed").prop("src",value)
        $("#modalCustom .modal-header .modal-title").html(value2)
        // alert(a)
        }
    })
</script>