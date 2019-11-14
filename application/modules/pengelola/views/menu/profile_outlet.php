<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Laundry | User Profile Outlet</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets_pengelola/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets_pengelola/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets_pengelola/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets_pengelola/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets_pengelola/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  
 <?php $this->load->view('menu/header') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Profil Outlet
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">User profile</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <?php if ($this->session->flashdata('successLaundry')): ?>
        <div class="alert alert-success" role="alert">
          <?php echo $this->session->flashdata('successLaundry'); ?>
        </div>
        <?php endif; ?>
         <?php if ($this->session->flashdata('gagalLaundry')): ?>
        <div class="alert alert-danger" role="alert">
          <?php echo $this->session->flashdata('gagalLaundry'); ?>
        </div>
        <?php endif; ?>
        <?php if ($this->session->flashdata('editProfile')): ?>
        <div class="alert alert-success" role="alert">
          <?php echo $this->session->flashdata('editProfile'); ?>
        </div>
        <?php endif; ?>
         <?php if ($this->session->flashdata('gagaleditProfile')): ?>
        <div class="alert alert-danger" role="alert">
          <?php echo $this->session->flashdata('gagaleditProfile'); ?>
        </div>
        <?php endif; ?>

        <?php foreach($laundry as $data ):?>
         <div class="row">
         <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Profil Laundry</a></li>
              <li><a href="#settings" data-toggle="tab">Ubah Data</a></li>
              <li><a href="#tambah" data-toggle="tab">Tambah Data</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->
                <div class="post">
                  <div class="user-block">
                   <!--  <img class="img-circle img-bordered-sm" src="<?php echo base_url();?>assets_pengelola/image/user_image/<?php echo $data['foto1'];?>" alt="user image"> -->
                        <span class="username">
                          <a href="#">Nama Laundry</a>
                        </span>
                    <span class="description">
                      <?php echo $data['nama_outlet'];?>
                    </span>
                  </div>
                  <div class="user-block">
                      <span class="username">
                        <a href="#">Moto Loundry</a>
                      </span>
                    <span class="description">
                      <?php echo $data['moto_outlet'];?>
                    </span>                  
                  </div>
                  <div class="user-block">
                      <span class="username">
                        <a href="#">No Telepon</a>
                      </span>
                    <span class="description">
                     <?php echo $data['no_telepon'];?>
                    </span>
                  </div>
                  <div class="user-block">
                      <span class="username">
                        <a href="#">Email</a>
                      </span>
                    <span class="description">
                     <?php echo $data['email'];?>
                    </span>
                  </div>
                  <div class="user-block">
                      <span class="username">
                        <a href="#">Alamat</a>
                      </span>
                    <span class="description">
                     <?php echo $data['alamat'];?>
                    </span>
                  </div>
                </div>

               <!--  <div class="post">
                  <div class="user-block">
                      <span class="username">
                        <a href="#">Galery Laundry</a>
                        <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                      </span>
                  </div>
                  <div class="row margin-bottom">
                    <div class="col-sm-6">
                      <img class="img-responsive" src="<?php echo base_url();?>assets_pengelola/image/user_image/<?php echo $data['foto1'];?>" alt="Photo">
                    </div>
                    <div class="col-sm-6">
                      <div class="row">
                        <div class="col-sm-6">
                          <img class="img-responsive" src="<?php echo base_url();?>assets_pengelola/image/user_image/<?php echo $data['foto2'];?>" alt="Photo">
                          <br>
                          <img class="img-responsive" src="<?php echo base_url();?>assets_pengelola/image/user_image/<?php echo $data['foto3'];?>" alt="Photo">
                        </div>
                        <div class="col-sm-6">
                          <img class="img-responsive" src="<?php echo base_url();?>assets_pengelola/image/user_image/<?php echo $data['foto4'];?>" alt="Photo">
                          <br>
                          <img class="img-responsive" src="<?php echo base_url();?>assets_pengelola/image/user_image/<?php echo $data['foto5'];?>" alt="Photo">
                        </div>
                      </div>
                    </div>
                  </div>
                </div> -->
              </div>
             
              <div class="tab-pane" id="settings">
               <form action="<?php echo base_url('editProfileLaundry');?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <div class="hidden">
                      <label for="inputName" class="col-sm-2 control-label">id otlet</label>
                      <div class="col-sm-10">
                        <input class="form-control <?php echo form_error('id_outlet') ? 'is-invalid':'' ?>"
                        type="text" name="id_outlet" placeholder="Nama Laundry" value="<?php echo $data['id_outlet'];?>" />
                        <div class="invalid-feedback">
                          <?php echo form_error('id_outlet') ?>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputName" class="col-sm-2 control-label">Nama Laundry</label>
                      <div class="col-sm-10">
                        <input class="form-control <?php echo form_error('nama_outlet') ? 'is-invalid':'' ?>"
                        type="text" name="nama_outlet" placeholder="Nama Laundry" value="<?php echo $data['nama_outlet'];?>" />
                        <div class="invalid-feedback">
                          <?php echo form_error('nama_outlet') ?>
                        </div>
                        <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail" class="col-sm-2 control-label">Moto Laundry</label>
                      <div class="col-sm-10">
                        <textarea class="form-control <?php echo form_error('moto_outlet') ? 'is-invalid':'' ?>"
                         name="moto_outlet"><?php echo $data['moto_outlet'];?></textarea>
                        <div class="invalid-feedback">
                          <?php echo form_error('moto_outlet') ?>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputName" class="col-sm-2 control-label">No Telepon</label>
                      <div class="col-sm-10">
                       <input class="form-control <?php echo form_error('no_telepon') ? 'is-invalid':'' ?>"
                        type="text" name="no_telepon" value="<?php echo $data['no_telepon'];?>" />
                        <div class="invalid-feedback">
                          <?php echo form_error('no_telepon') ?>
                        </div>
                      </div>
                    </div>
                     <div class="form-group">
                      <label for="inputName" class="col-sm-2 control-label">Email</label>
                      <div class="col-sm-10">
                       <input class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>"
                        type="email" name="email" value="<?php echo $data['email'];?>"/>
                        <div class="invalid-feedback">
                          <?php echo form_error('email') ?>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputExperience" class="col-sm-2 control-label">Alamat Lengkap</label>
                      <div class="col-sm-10">
                        <textarea class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>"
                         name="alamat"><?php echo $data['alamat'];?></textarea>
                        <div class="invalid-feedback">
                          <?php echo form_error('alamat') ?>
                        </div>
                      </div>
                  </div>
                  <!-- <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Foto 1</label>
                    <div class="col-sm-10">
                      <input class="form-control <?php echo form_error('foto1') ? 'is-invalid':'' ?>"
                      type="file" name="foto1"  />
                      <div class="invalid-feedback">
                        <?php echo form_error('foto1') ?>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Foto 2</label>
                    <div class="col-sm-10">
                      <input class="form-control <?php echo form_error('foto2') ? 'is-invalid':'' ?>"
                      type="file" name="foto2"  />
                      <div class="invalid-feedback">
                        <?php echo form_error('foto2') ?>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Foto 3</label>
                    <div class="col-sm-10">
                      <input class="form-control <?php echo form_error('foto3') ? 'is-invalid':'' ?>"
                      type="file" name="foto3"  />
                      <div class="invalid-feedback">
                        <?php echo form_error('foto3') ?>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Foto 4</label>
                    <div class="col-sm-10">
                      <input class="form-control <?php echo form_error('foto4') ? 'is-invalid':'' ?>"
                      type="file" name="foto4"  />
                      <div class="invalid-feedback">
                        <?php echo form_error('foto4') ?>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Foto 5</label>
                    <div class="col-sm-10">
                      <input class="form-control <?php echo form_error('foto5') ? 'is-invalid':'' ?>"
                      type="file" name="foto5"  />
                      <div class="invalid-feedback">
                        <?php echo form_error('foto5') ?>
                      </div>
                    </div>
                  </div> -->
                  <div class="hidden">
                    <label for="inputName" class="col-sm-2 control-label">id user</label>
                    <div class="col-sm-10">
                      <input class="form-control <?php echo form_error('id_user') ? 'is-invalid':'' ?>"
                      type="text" name="id_user" value="<?php echo $data['id_user'];?>" />
                      <div class="invalid-feedback">
                        <?php echo form_error('id_user') ?>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Simpan Data</button>
                    </div>
                  </div>
              </form>
              </div>
                 <div class="tab-pane" id="tambah">
                  <form action="<?php echo base_url('addProfileLaundry');?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <div class="form-group">
                      <label for="inputName" class="col-sm-2 control-label">Nama Laundry</label>
                      <div class="col-sm-10">
                        <input class="form-control <?php echo form_error('nama_outlet') ? 'is-invalid':'' ?>"
                        type="text" name="nama_outlet" placeholder="Nama Laundry" />
                        <div class="invalid-feedback">
                          <?php echo form_error('nama_outlet') ?>
                        </div>
                        <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail" class="col-sm-2 control-label">Moto Laundry</label>
                      <div class="col-sm-10">
                        <textarea class="form-control <?php echo form_error('moto_outlet') ? 'is-invalid':'' ?>"
                         name="moto_outlet" placeholder="Moto Laundry"></textarea>
                        <div class="invalid-feedback">
                          <?php echo form_error('moto_outlet') ?>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputName" class="col-sm-2 control-label">No Telepon</label>
                      <div class="col-sm-10">
                       <input class="form-control <?php echo form_error('no_telepon') ? 'is-invalid':'' ?>"
                        type="text" name="no_telepon" placeholder="No Telepon" />
                        <div class="invalid-feedback">
                          <?php echo form_error('no_telepon') ?>
                        </div>
                      </div>
                    </div>
                     <div class="form-group">
                      <label for="inputName" class="col-sm-2 control-label">Email</label>
                      <div class="col-sm-10">
                       <input class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>"
                        type="email" name="email" placeholder="Email" />
                        <div class="invalid-feedback">
                          <?php echo form_error('email') ?>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputExperience" class="col-sm-2 control-label">Alamat Lengkap</label>
                      <div class="col-sm-10">
                        <textarea class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>"
                         name="alamat" placeholder="Alamat Lengkap"></textarea>
                        <div class="invalid-feedback">
                          <?php echo form_error('alamat') ?>
                        </div>
                      </div>
                  </div>
                  <!-- <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Foto 1</label>
                    <div class="col-sm-10">
                      <input class="form-control <?php echo form_error('foto1') ? 'is-invalid':'' ?>"
                      type="file" name="foto1"  />
                      <div class="invalid-feedback">
                        <?php echo form_error('foto1') ?>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Foto 2</label>
                    <div class="col-sm-10">
                      <input class="form-control <?php echo form_error('foto2') ? 'is-invalid':'' ?>"
                      type="file" name="foto2"  />
                      <div class="invalid-feedback">
                        <?php echo form_error('foto2') ?>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Foto 3</label>
                    <div class="col-sm-10">
                      <input class="form-control <?php echo form_error('foto3') ? 'is-invalid':'' ?>"
                      type="file" name="foto3"  />
                      <div class="invalid-feedback">
                        <?php echo form_error('foto3') ?>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Foto 4</label>
                    <div class="col-sm-10">
                      <input class="form-control <?php echo form_error('foto4') ? 'is-invalid':'' ?>"
                      type="file" name="foto4"  />
                      <div class="invalid-feedback">
                        <?php echo form_error('foto4') ?>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Foto 5</label>
                    <div class="col-sm-10">
                      <input class="form-control <?php echo form_error('foto5') ? 'is-invalid':'' ?>"
                      type="file" name="foto5"  />
                      <div class="invalid-feedback">
                        <?php echo form_error('foto5') ?>
                      </div>
                    </div>
                  </div> -->
                  <div class="hidden">
                    <label for="inputName" class="col-sm-2 control-label">id user</label>
                    <div class="col-sm-10">
                      <input class="form-control <?php echo form_error('id_user') ? 'is-invalid':'' ?>"
                      type="text" name="id_user" value="5" />
                      <div class="invalid-feedback">
                        <?php echo form_error('id_user') ?>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Simpan Data</button>
                    </div>
                  </div>
              </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <?php endforeach ;?>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php $this->load->view("menu/footer");?>
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url();?>assets_pengelola/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>assets_pengelola/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url();?>assets_pengelola/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets_pengelola/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>assets_pengelola/dist/js/demo.js"></script>
</body>
</html>
