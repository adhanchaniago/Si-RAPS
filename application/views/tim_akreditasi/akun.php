<?php 
	$this->load->view("public_part/header");
?>

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
			<li>
			<?php 
			    if($this->session->userdata("pj_standar") == "1"){
			?>
			        <a href="<?php echo base_url() ?>tim_akreditasi/dokumen_akreditasi/standar_1"><i class="fas fa-upload"></i> <span>Kelola Dokumen</span></a>
			<?php
			    }else if($this->session->userdata("pj_standar") == "2"){
			?>
			        <a href="<?php echo base_url() ?>tim_akreditasi/dokumen_akreditasi/standar_2"><i class="fas fa-upload"></i> <span>Kelola Dokumen</span></a>
			<?php
			    }else if($this->session->userdata("pj_standar") == "3"){
			?>
			        <a href="<?php echo base_url() ?>tim_akreditasi/dokumen_akreditasi/standar_3"><i class="fas fa-upload"></i> <span>Kelola Dokumen</span></a>
			<?php
			    }else if($this->session->userdata("pj_standar") == "4"){
			?>
			        <a href="<?php echo base_url() ?>tim_akreditasi/dokumen_akreditasi/standar_4"><i class="fas fa-upload"></i> <span>Kelola Dokumen</span></a>
			<?php
			    }else if($this->session->userdata("pj_standar") == "5"){
			?>
			        <a href="<?php echo base_url() ?>tim_akreditasi/dokumen_akreditasi/standar_5"><i class="fas fa-upload"></i> <span>Kelola Dokumen</span></a>
			<?php
			    }else if($this->session->userdata("pj_standar") == "6"){
			?>
			        <a href="<?php echo base_url() ?>tim_akreditasi/dokumen_akreditasi/standar_6"><i class="fas fa-upload"></i> <span>Kelola Dokumen</span></a>
			<?php
			    }else if($this->session->userdata("pj_standar") == "7"){
			?>
			        <a href="<?php echo base_url() ?>tim_akreditasi/dokumen_akreditasi/standar_7"><i class="fas fa-upload"></i> <span>Kelola Dokumen</span></a>
			<?php
			    }else if($this->session->userdata("pj_standar") == "8"){
			?>
			        <a href="<?php echo base_url() ?>tim_akreditasi/dokumen_akreditasi/standar_8"><i class="fas fa-upload"></i> <span>Kelola Dokumen</span></a>
			<?php
			    }else if($this->session->userdata("pj_standar") == "9"){
			?>
			        <a href="<?php echo base_url() ?>tim_akreditasi/dokumen_akreditasi/standar_9"><i class="fas fa-upload"></i> <span>Kelola Dokumen</span></a>
			<?php
			    }
			?>
			</li>
			<li class="active">
				<a href="#"><i class="fas fa-user-circle"></i> <span>Akun</span></a>
			</li>
		</ul>
	</section>
</aside>

<div class="content-wrapper">
	<section class="content-header">
		<h1>Akun</h1>
		<ol class="breadcrumb">
		    <li><a href="#"><i class="fa fa-tachometer-alt"></i> Akun</a></li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
		   	<div class="col-md-1"></div>
			<div class="col-md-6">
			    <div class="box box-default">
				    <div class="box-header with-border">
				        <h3 class="box-title"><i class="fas fa-id-card"></i> Informasi Pribadi</h3>
				        <div class="box-tools pull-right">
					        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
					        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
				        </div>
				    </div>
				    <div class="box-body">
					    <div class="row">
					        <form class="form-horizontal" method="POST" action="<?php echo base_url() ?>tim_akreditasi/akun/edit_profil">
					            <div class="col-md-12">
					                <div class="box-body">
					                    <div class="form-group">
					                      	<label class="col-sm-5 control-label" style="text-align: left;">Nama</label>
					                      	<div class="col-sm-7">
					                        	<label class="control-label" style="text-align: left;">:&nbsp;&nbsp;&nbsp;<?php echo $data_user->nama ?></label>
					                      	</div>
					                    </div>
					                    <div class="form-group">
					                      	<label class="col-sm-5 control-label" style="text-align: left;">NIDN</label>
					                      	<div class="col-sm-7">
					                        	<label class="control-label" style="text-align: left;">:&nbsp;&nbsp;&nbsp;<?php echo $data_user->nidn ?></label>
					                      	</div>
					                    </div>
							            <div class="form-group">
							                <label class="col-sm-5 control-label" style="text-align: left;">Jabatan</label>
							                <div class="col-sm-7">
					                        	<label class="control-label" style="text-align: left;">:&nbsp;&nbsp;&nbsp;<?php echo $data_user->jabatan ?></label>
					                      	</div>
							            </div>
							            <div class="form-group">
							                <label class="col-sm-5 control-label" style="text-align: left;">Penanggungjawab Standar</label>
							                <div class="col-sm-7">
					                        	<label class="control-label" style="text-align: left;">:&nbsp;&nbsp;&nbsp;<?php echo $data_user->penanggungjawab_standar ?></label>
					                      	</div>
							            </div>
							            <div class="form-group">
							                <label class="col-sm-5 control-label" style="text-align: left;">Homebase</label>
							                <div class="col-sm-7">
					                        	<label class="control-label" style="text-align: left;">:&nbsp;&nbsp;&nbsp;<?php echo $data_user->homebase ?></label>
					                      	</div>
							            </div>
							            <div class="form-group">
							                <label class="control-label"></label>
							            </div>
					                </div>
					            </div>
					    </div>
				    </div>
				    <div class="box-footer"></div>
				</div>
			</div>
			<div class="col-md-4">
			    <div class="box box-default">
				    <div class="box-header with-border">
				        <h3 class="box-title"><i class="fas fa-user-circle"></i> Informasi Akun</h3>
				        <div class="box-tools pull-right">
					        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
					        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
				        </div>
				    </div>
				    <div class="box-body">
					    <div class="row">
						        <div class="col-md-12">
						            <div class="box-body">
							            <div class="form-group">
							                <label class="col-sm-4 control-label" style="text-align: left;">Username</label>
							                <div class="col-sm-8">
					                        	<label class="control-label" style="text-align: left;">:&nbsp;&nbsp;&nbsp;<?php echo $data_user->username ?></label>
					                      	</div>
							            </div><br><br>
							            <div class="form-group">
							                <label class="col-sm-4 control-label" style="text-align: left;">Password</label>
							                <div class="col-sm-8">
					                        	<label class="control-label" style="text-align: left;">:&nbsp;&nbsp;&nbsp;<?php echo $data_user->password ?></label>
					                      	</div>
							            </div><br><br>
							            <div class="form-group">
							                <label class="col-sm-4 control-label" style="text-align: left;">Level</label>
							                <div class="col-sm-8">
					                        	<label class="control-label" style="text-align: left;">:&nbsp;&nbsp;&nbsp;<?php echo $data_user->level ?></label>
					                      	</div>
							            </div><br><br>
							            <div>
							                <label class="control-label">&nbsp;&nbsp;&nbsp;</label>
							            </div>
						            </div>
						            <div class="box-footer pull-right">
							            <input type="submit" name="submit" class="btn btn-success" value="Edit Profil">
						            </div>
						        </div>
					        </form>
					    </div>
				    </div>
				    <div class="box-footer"></div>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
	</section>
</div>

<?php 
	$this->load->view("public_part/footer");
?>