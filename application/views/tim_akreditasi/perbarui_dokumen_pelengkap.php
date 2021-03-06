<!-- header di controller Kelola_dokumen -->

<aside class="main-sidebar">
	<section class="sidebar">
		<?php 
			$this->load->view("public_part/sidebar_profil");
		?>
		<ul class="sidebar-menu" data-widget="tree">
		  	<li class="header">MAIN NAVIGATION</li>
		 	<li>
				<a href="<?php echo base_url() ?>tim_akreditasi/dokumen_akreditasi"><i class="fas fa-folder-open"></i> <span>Dokumen Akreditasi</span></a>
			</li>
			<li class="active">
			<?php 
			    if($this->session->userdata("sess_id_kriteria") == "1"){
			?>
			        <a href="<?php echo base_url() ?>tim_akreditasi/dokumen_akreditasi/kriteria_1"><i class="fas fa-upload"></i> <span>Kelola Dokumen</span></a>
			<?php
			    }else if($this->session->userdata("sess_id_kriteria") == "2"){
			?>
			        <a href="<?php echo base_url() ?>tim_akreditasi/dokumen_akreditasi/kriteria_2"><i class="fas fa-upload"></i> <span>Kelola Dokumen</span></a>
			<?php
			    }else if($this->session->userdata("sess_id_kriteria") == "3"){
			?>
			        <a href="<?php echo base_url() ?>tim_akreditasi/dokumen_akreditasi/kriteria_3"><i class="fas fa-upload"></i> <span>Kelola Dokumen</span></a>
			<?php
			    }else if($this->session->userdata("sess_id_kriteria") == "4"){
			?>
			        <a href="<?php echo base_url() ?>tim_akreditasi/dokumen_akreditasi/kriteria_4"><i class="fas fa-upload"></i> <span>Kelola Dokumen</span></a>
			<?php
			    }else if($this->session->userdata("sess_id_kriteria") == "5"){
			?>
			        <a href="<?php echo base_url() ?>tim_akreditasi/dokumen_akreditasi/kriteria_5"><i class="fas fa-upload"></i> <span>Kelola Dokumen</span></a>
			<?php
			    }else if($this->session->userdata("sess_id_kriteria") == "6"){
			?>
			        <a href="<?php echo base_url() ?>tim_akreditasi/dokumen_akreditasi/kriteria_6"><i class="fas fa-upload"></i> <span>Kelola Dokumen</span></a>
			<?php
			    }else if($this->session->userdata("sess_id_kriteria") == "7"){
			?>
			        <a href="<?php echo base_url() ?>tim_akreditasi/dokumen_akreditasi/kriteria_7"><i class="fas fa-upload"></i> <span>Kelola Dokumen</span></a>
			<?php
			    }else if($this->session->userdata("sess_id_kriteria") == "8"){
			?>
			        <a href="<?php echo base_url() ?>tim_akreditasi/dokumen_akreditasi/kriteria_8"><i class="fas fa-upload"></i> <span>Kelola Dokumen</span></a>
			<?php
			    }else if($this->session->userdata("sess_id_kriteria") == "9"){
			?>
			        <a href="<?php echo base_url() ?>tim_akreditasi/dokumen_akreditasi/kriteria_9"><i class="fas fa-upload"></i> <span>Kelola Dokumen</span></a>
			<?php
			    }
			?>
			</li>
			<li>
				<a href="<?php echo base_url() ?>tim_akreditasi/akun"><i class="fas fa-user-circle"></i> <span>Akun</span></a>
			</li>
		</ul>
	</section>
</aside>

<div class="content-wrapper">
	<section class="content-header">
		<h1>Perbarui Dokumen</h1>
		<ol class="breadcrumb">
		    <li><a href="#"><i class="fa fa-tachometer-alt"></i> Perbarui Dokumen</a></li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
		   	<div class="col-md-12">
		   		<div class="box box-default">
				    <div class="box-header with-border">
				        <h3 class="box-title"><i class="fa fa-edit"></i> Perbarui Dokumen Pelengkap</h3>
				        <div class="box-tools pull-right">
					        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
					        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
				        </div>
				    </div>
				    <div class="box-body">
					    <div class="row">
					        <?php echo form_open_multipart('tim_akreditasi/kelola_dokumen/perbarui_pelengkap') ?>
					        	<div class="col-md-2"></div>
					            <div class="col-md-8">
					                <div class="box-body form-horizontal">
					                	<div class="form-group">
					                      	<label class="col-sm-4 control-label">Judul Dokumen</label>
					                      	<div class="col-sm-8">
					                      		<input type="hidden" name="fid_dokumen" class="form-control" style="text-transform: capitalize;" value="<?php echo $data_dokumen->id_dokumen_pl ?>">
					                        	<input type="text" name="fjudul_dokumen" class="form-control" style="text-transform: capitalize;" value="<?php echo $data_dokumen->judul_dokumen ?>" required>
					                      	</div>
					                    </div>
					                    <div style="text-align:right;">**Kosongkan jika tidak memperbarui dokumen</div>
					                	<div class="form-group">
					                      	<label class="col-sm-4 control-label">(DOC, DOCX, PDF)</label>
					                      	<div class="col-sm-8" style="text-align:right;">
					                        	<input type="file" name="fnama_dokumen" class="form-control">
					                        	<?php echo $error ?>
					                      	</div>
					                    </div>
							            <div class="form-group">
							                <label class="col-sm-4 control-label">Penyusun</label>
					                      	<div class="col-sm-8">
					                        	<input type="hidden" name="fpenyusun" class="form-control" style="text-transform: capitalize;" value="<?php echo $this->session->userdata('sess_id_auth'); ?>" readonly>
					                        	<input type="text" name="" class="form-control" style="text-transform: capitalize;" value="<?php echo $session->nama; ?>" readonly>
					                      	</div>
							            </div>
							            <div class="form-group">
					                      	<label class="col-sm-4 control-label">NIDN</label>
					                      	<div class="col-sm-8">
					                        	<input type="text" name="" class="form-control" style="text-transform: capitalize;" value="<?php echo $session->nidn; ?>" readonly>
					                      	</div>
					                    </div>
							            <div class="box-footer pull-right">
									        <input type="reset" class="btn btn-default" value="Batal">
									        <input type="submit" name="submit" class="btn btn-info" value="Simpan">
								        </div>
					                </div>
					            </div>
						        <div class="col-md-2"></div>
					        <?php echo form_close() ?>
					    </div>
				    </div>
				    <div class="box-footer"></div>
				</div>
		   	</div>
		</div>
	</section>
</div>

<?php 
	$this->load->view("public_part/footer");
?>