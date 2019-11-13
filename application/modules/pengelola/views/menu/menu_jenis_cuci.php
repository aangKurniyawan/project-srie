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
        Data Jenis Cuci
        <small>10 Nopember 2019</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Dashboard</a></li>
        <li class="active">Data Jenis Cuci</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
       <?php if ($this->session->flashdata('cuci')): ?>
        <div class="alert alert-success" role="alert">
          <?php echo $this->session->flashdata('cuci'); ?>
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
       <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Data Master Jenis Cuci</h3>

              <!-- <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div> -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="chart">
                   <form action="<?php echo base_url('addJenisCuci');?>" method="post" role="form">
                    <div class="box-body">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Nama Jenis Cuci</label>
                        <input class="form-control" type="hidden" name="id_user" value="5" />
                        <input class="form-control <?php echo form_error('nama_jenis') ? 'is-invalid':'' ?>"
                          type="text" name="nama_jenis" placeholder="Nama Jenis Cuci" />
                        <div class="invalid-feedback">
                          <?php echo form_error('nama_jenis') ?>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Harga</label>
                        <input class="form-control <?php echo form_error('harga') ? 'is-invalid':'' ?>"
                          type="text" name="harga" placeholder="Harga" />
                        <div class="invalid-feedback">
                          <?php echo form_error('harga') ?>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Lama Pengerjaan</label>
                        <select class="form-control <?php echo form_error('lama_hari') ? 'is-invalid':'' ?>" name="lama_hari">
                          <option>-Pilih Lama Waktu-</option>
                          <option>4 Jam</option>
                          <option>1 Hari</option>
                          <option>2 Hari</option>
                          <option>3 Hari</option>
                          <option>4 Hari</option>
                          <option>5 Hari</option>
                          <option>6 Hari</option>
                          <option>7 Hari</option>
                        </select>
                         <div class="invalid-feedback">
                          <?php echo form_error('lama_hari') ?>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Status</label>
                        <select class="form-control <?php echo form_error('status') ? 'is-invalid':'' ?>" name="status">
                          <option>-Pilih Status-</option>
                          <option>Aktif</option>
                          <option>Tidak Aktif</option>
                        </select>
                        <div class="invalid-feedback">
                          <?php echo form_error('status') ?>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Deskripsi Jenis Cuci</label>
                        <textarea class="form-control <?php echo form_error('deskripsi') ? 'is-invalid':'' ?>" name="deskripsi">
                        </textarea>
                        <div class="invalid-feedback">
                          <?php echo form_error('deskripsi') ?>
                        </div>
                      </div>
                      <div class="form-group">
                        <input type="submit" class="btn bg-maroon btn-flat margin" value="Simpan Data">
                        <input type="reset" class="btn bg-purple btn-flat margin" value="Batal">
                      </div>
                    </div>
                  </div>
                  <!-- /.chart-responsive -->
                </div>
                <!-- /.col -->
                <div class="col-md-6">
                  <div class="box-header with-border">
                    <h3 class="box-title">Data Jenis Cuci</h3>
                  </div>
                  <!-- /.box-header -->
                   <div class="box">
                    <div class="box-body">
                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>No</th>
                          <th>Layanan</th>
                          <th>Harga</th>
                          <th>Pengerjaan</th>
                          <th>Status</th>
                          <th>Detail</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                           foreach($jenis as $data): 
                           $no = 1;
                        ?>
                        <tr>
                          <td><?php echo $no++ ;?></td>
                          <td><?php echo $data['nama_jenis'];?></td>
                          <td><?php echo $data['harga'];?></td>
                          <td><?php echo $data['lama_hari'];?></td>
                          <td><?php echo $data['status'];?></td>
                          <td>C</td>
                        </tr>
                       <?php endforeach;?>
                        </tfoot>
                      </table>
                        </div>
                          <!-- /.box-body -->
                        </div>
                      </div>
                    </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
        </div>
        <!-- /.col -->
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
