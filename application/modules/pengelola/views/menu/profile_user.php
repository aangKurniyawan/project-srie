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
        Data Profil User
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">User profile</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">
           <?php foreach($user as $users):?>
          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" 
              src="<?php echo base_url();?>assets_pengelola/image/user_image/<?php echo $users['foto'] ?>" alt="User profile picture">

              <h3 class="profile-username text-center"><?php echo $users['nama_user'] ?></h3>

              <p class="text-muted text-center"><?php echo $users['level'] ?></p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Jenis Kelamin</b><br> <a ><?php echo $users['gender'] ?></a>
                </li>
                <li class="list-group-item">
                  <b>Email</b> <a><?php echo $users['email'] ?></a>
                </li>
                <li class="list-group-item">
                  <b>No Telepon</b><br> <a ><?php echo $users['no_telepon'] ?></a>
                </li>
                <li class="list-group-item">
                  <b>Alamat</b><br> <a><?php echo $users['alamat'] ?></a>
                </li>
              </ul>
                <center>
                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-danger">
                Hapus Data User
              </button>
                </center>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Edit Profile</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <?php if ($this->session->flashdata('update')): ?>
                <div class="alert alert-success" role="alert">
                  <?php echo $this->session->flashdata('update'); ?>
                </div>
                <?php endif; ?>
                <?php if ($this->session->flashdata('duplicat')): ?>
                <div class="alert alert-danger" role="alert">
                  <?php echo $this->session->flashdata('duplicat'); ?>
                </div>
                <?php endif; ?>
                <form action="<?php echo base_url('edit');?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Nama Lengkap</label>
                    <input type="hidden" name="id_user" value="<?php echo $users['id_user'] ?>" />
                    <div class="col-sm-10">
                       <input class="form-control <?php echo form_error('nama_user') ? 'is-invalid':'' ?>"
                        type="text" name="nama_user"  value="<?php echo $users['nama_user'] ?>" />
                    </div>
                    <div class="invalid-feedback">
                      <?php echo form_error('nama_user') ?>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">No Telepon</label>
                    <div class="col-sm-10">
                       <input class="form-control <?php echo form_error('no_telepon') ? 'is-invalid':'' ?>"
                        type="text" name="no_telepon"  value="<?php echo $users['no_telepon'] ?>" />
                    </div>
                    <div class="invalid-feedback">
                      <?php echo form_error('nama_user') ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                      <select class="form-control <?php echo form_error('gender') ? 'is-invalid':'' ?>"name="gender">
                        <option value="<?php echo $users['gender'] ?>"><?php echo $users['gender'] ?></option>
                        <option>-Pilih Jenis Kelamin-</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                      </select>
                    </div>
                     <div class="invalid-feedback">
                      <?php echo form_error('gender') ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                       <input class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>"
                        type="text" name="email"  value="<?php echo $users['email'] ?>" />
                    </div>
                    <div class="invalid-feedback">
                      <?php echo form_error('email') ?>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-10">
                       <input class="form-control <?php echo form_error('password') ? 'is-invalid':'' ?>"
                        type="password" name="password"  value="<?php echo $users['password'] ?>" />
                    </div>
                    <div class="invalid-feedback">
                      <?php echo form_error('password') ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Level</label>
                   <div class="col-sm-10">
                      <select class="form-control <?php echo form_error('level') ? 'is-invalid':'' ?>"name="level">
                        <option value="<?php echo $users['level'] ?>"><?php echo $users['level'] ?></option>
                        <option>-Pilih Level-</option>
                        <option value="Member">Member</option>
                        <option value="Operator">Operator</option>
                        <option value="Pengelola">Pengelola</option>
                      </select>
                    </div>
                     <div class="invalid-feedback">
                      <?php echo form_error('gender') ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">Alamat</label>
                    <div class="col-sm-10">
                      <textarea class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>" name="alamat">
                        <?php echo $users['alamat'] ?>
                      </textarea>
                    </div>
                    <div class="invalid-feedback">
                      <?php echo form_error('alamat') ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Foto Profile</label>
                    <div class="col-sm-10">
                       <input class="form-control"
                        type="hidden" name="old_image"  value="<?php echo $users['foto'] ?>" />
                       <input class="form-control"
                        type="file" name="foto"  value="<?php echo $users['foto'] ?>" />
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn bg-navy margin">Simpan Pembaharuan</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
       <div class="modal modal-danger fade" id="modal-danger">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Peringatan !!!!</h4>
              </div>
              <div class="modal-body">
                <p>Data yang sudah dihapus TIDAK bisa digunakan kembali</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Batal</button>
                <a href="<?php echo base_url('hapusAkun/').$users['id_user'];?>">
                  <button type="button" class="btn btn-outline">Hapus Data</button>
                </a>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
      <?php endforeach;?>
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
