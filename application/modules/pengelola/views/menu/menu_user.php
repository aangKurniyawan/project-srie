<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Menu User</title>
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
   <link rel="stylesheet" href="<?php echo base_url();?>assets_pengelola/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <?php  $this->load->view("menu/header");?>
  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data User
        <small>10 Nopember 2019</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Dashboard</a></li>
        <li class="active">User Data</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Form Tambah User</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success" role="alert">
          <?php echo $this->session->flashdata('success'); ?>
        </div>
        <?php endif; ?>
        <?php if ($this->session->flashdata('duplicat')): ?>
        <div class="alert alert-danger" role="alert">
          <?php echo $this->session->flashdata('duplicat'); ?>
        </div>
        <?php endif; ?>
         <?php if ($this->session->flashdata('gagal')): ?>
        <div class="alert alert-danger" role="alert">
          <?php echo $this->session->flashdata('gagal'); ?>
        </div>
        <?php endif; ?>
         <?php if ($this->session->flashdata('delete')): ?>
        <div class="alert alert-success" role="alert">
          <?php echo $this->session->flashdata('delete'); ?>
        </div>
        <?php endif; ?>
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
             <form action="<?php echo base_url('addUser');?>" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Lengkap</label>
                  <input class="form-control <?php echo form_error('nama_user') ? 'is-invalid':'' ?>"
                    type="text" name="nama_user" placeholder="Nama Lengkap" />
                  <div class="invalid-feedback">
                    <?php echo form_error('nama_user') ?>
                  </div>
                  <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">No Telepon</label>
                  <input class="form-control <?php echo form_error('no_telepon') ? 'is-invalid':'' ?>"
                    type="text" name="no_telepon" placeholder="Nomer Telepon" />
                  <div class="invalid-feedback">
                    <?php echo form_error('no_telepon') ?>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Gender</label>
                  <select class="form-control" name="gender">
                    <option >-Pilih Gender-</option>
                    <option value="laki-laki">Laki-Laki</option>
                    <option value="perempuan">Perempuan</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Alamat Lengkap</label>
                  <textarea class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>"
                   name="alamat" placeholder="alamat..."></textarea>
                  <div class="invalid-feedback">
                    <?php echo form_error('alamat') ?>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-md-6">
              <div class="box-body">
              <div class="form-group">
                  <label for="exampleInputEmail1">Level User</label>
                  <select class="form-control" name="level">
                    <option>-Pilih Level-</option>
                    <option value="Member">Member</option>
                    <option value="Operator">Operator</option>
                    <option value="Pengelola">Pengelola</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Alamat Email</label>
                  <input class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>"
                    type="email" name="email" placeholder="Email Anda" />
                  <div class="invalid-feedback">
                    <?php echo form_error('email') ?>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input class="form-control <?php echo form_error('password') ? 'is-invalid':'' ?>"
                    type="password" name="password" placeholder="Password" />
                  <div class="invalid-feedback">
                    <?php echo form_error('password') ?>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Foto</label>
                  <input class="form-control"
                    type="file" name="foto" placeholder="foto" />
                </div>
                <div class="form-group">
                  <input type="submit" class="btn bg-maroon btn-flat margin" value="Simpan Data">
                  <input type="reset" class="btn bg-purple btn-flat margin" value="Batal">
                </div>
            </div>
            <!-- /.col -->
          </div> 
           </div>
        </form>
          <!-- /.row -->
        </div>
      </div>
      <!-- /.box -->
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Pengguna Aplikasi</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Lengkap</th>
                  <th>Gender</th>
                  <th>No Telepon</th>
                  <th>Alamat Lengkap</th>
                  <th>Level</th>
                  <th>Email</th>
                  <th>Detail</th>
                </tr>
                </thead>
                <tbody>
                <?php
                  $no = 1;
                 foreach($user as $users):
                ?>
                <tr>
                  <td><?php echo $no++?></td>
                  <td><?php echo $users->nama_user ?></td>
                  <td><?php echo $users->gender ?></td>
                  <td><?php echo $users->no_telepon ?></td>
                  <td><?php echo $users->alamat ?></td>
                  <td><?php echo $users->level ?></td>
                  <td><?php echo $users->email ?></td>
                  <td> 
                    <a href="<?php echo base_url('editUser/'.$users->id_user)?>"class="btn bg-purple btn-flat margin">
                      <i class="fa  fa-eye"></i> Detail
                    </a>
                  </td>
                </tr>
              <?php endforeach;?>
                </tbody>
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>Nama Lengkap</th>
                  <th>Gender</th>
                  <th>No Telepon</th>
                  <th>Alamat Lengkap</th>
                  <th>Level</th>
                  <th>Email</th>
                  <th>Detail</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php $this->load->view('menu/footer');?>
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url();?>assets_pengelola/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>assets_pengelola/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url();?>assets_pengelola/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url();?>assets_pengelola/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets_pengelola/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>assets_pengelola/dist/js/demo.js"></script>
<script src="<?php echo base_url();?>assets_pengelola/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets_pengelola/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
