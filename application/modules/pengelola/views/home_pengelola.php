<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Laundry | Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets_pengelola/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets_pengelola/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets_pengelola/bower_components/Ionicons/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets_pengelola/bower_components/jvectormap/jquery-jvectormap.css">
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
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<!--Header -->
  <?php  $this->load->view("menu/header");?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>07 Nopember 2019</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-aqua">
            <span class="info-box-icon"><i class="fa fa-bookmark-o"></i></span>
            <?php foreach($bulananDisimpan as $bulan){ ?>
            <div class="info-box-content">
              <span class="info-box-text">Status Disimpan</span>
              <span class="info-box-number"><?php echo $bulan['jumlah_bulanan'];?></span>

              <div class="progress">
                <div class="progress-bar" style="width: 70%"></div>
              </div>
                  <span class="progress-description">
                    Jumlah dalam 30 hari
                  </span>
            </div>
            <?php } ?>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-green">
            <span class="info-box-icon"><i class="fa fa-thumbs-o-up"></i></span>
             <?php foreach($bulananProses as $bulan){ ?>
            <div class="info-box-content">
              <span class="info-box-text">Status Proses</span>
              <span class="info-box-number"><?php echo $bulan['jumlah_bulanan'];?></span>

              <div class="progress">
                <div class="progress-bar" style="width: 70%"></div>
              </div>
                  <span class="progress-description">
                    Jumlah dalam 30 hari
                  </span>
            </div>
            <?php } ?>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-yellow">
            <span class="info-box-icon"><i class="fa fa-calendar"></i></span>
            <?php foreach($bulananSelesai as $bulan){ ?>
            <div class="info-box-content">
              <span class="info-box-text">Status Selesai</span>
              <span class="info-box-number"><?php echo $bulan['jumlah_bulanan'];?></span>

              <div class="progress">
                <div class="progress-bar" style="width: 70%"></div>
              </div>
                  <span class="progress-description">
                   Jumlah dalam 30 hari
                  </span>
            </div>
            <?php } ?>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-red">
            <span class="info-box-icon"><i class="fa fa-comments-o"></i></span>
            <?php foreach($bulananBatal as $bulan){ ?>
            <div class="info-box-content">
              <span class="info-box-text">Status Batal</span>
              <span class="info-box-number"><?php echo $bulan['jumlah_bulanan'];?></span>

              <div class="progress">
                <div class="progress-bar" style="width: 70%"></div>
              </div>
                  <span class="progress-description">
                    Jumlah dalam 30 hari
                  </span>
            </div>
            <?php } ?>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Rekap Laporan Bulanan</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
                  <!-- TABLE: LATEST ORDERS -->
                  <div class="box box-info">
                    <div class="box-body">
                      <div class="table-responsive">
                        <table class="table no-margin">
                          <thead>
                          <tr>
                            <th>No</th>
                            <th>Bulan</th>
                            <th>Jumlah Transaksi</th>
                            <th>Transaksi Selesai</th>
                            <th>Transaksi Proses</th>
                            <th>Transaksi Batal</th>
                            <th>Jumlah Pendapatan</th>
                            <th>Detail</th>
                          </tr>
                          </thead>
                          <tbody>
                          <tr>
                            <td><a href="pages/examples/invoice.html">1</a></td>
                            <td>Januari</td>
                            <td><center><span class="label label-info">3000</span></center></td>
                            <td><center><span class="label label-success">300</span></center></td>
                            <td><center><span class="label label-warning">100</span></center></td>
                            <td><center><span class="label label-danger">3</span></center></td>
                            <td><center>Rp. 30,000,000,-</td>
                            <td><button type="button" class="btn btn-primary">Detail</button></td>
                          </tr>
                          <tr>
                            <td><a href="pages/examples/invoice.html">2</a></td>
                            <td>Februari</td>
                            <td><center><span class="label label-info">3000</span></center></td>
                            <td><center><span class="label label-success">300</span></center></td>
                            <td><center><span class="label label-warning">100</span></center></td>
                            <td><center><span class="label label-danger">3</span></center></td>
                            <td><center>Rp. 30,000,000,-</center></td>
                            <td><button type="button" class="btn btn-primary">Detail</button></td>
                          </tr>
                          <tr>
                            <td><a href="pages/examples/invoice.html">3</a></td>
                            <td>Maret</td>
                            <td><center><span class="label label-info">3000</span></center></td>
                            <td><center><span class="label label-success">300</span></center></td>
                            <td><center><span class="label label-warning">100</span></center></td>
                            <td><center><span class="label label-danger">3</span></center></td>
                            <td><center>Rp. 30,000,000,-</td>
                            <td><button type="button" class="btn btn-primary">Detail</button></td>
                          </tr>
                          </tbody>
                        </table>
                      </div>
                      <!-- /.table-responsive -->
                    </div>
                  </div>
                  <!-- /.box -->
                </div>
              </div>
              <!-- /.row -->
            </div>
            <!-- ./box-body -->
           
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <div class="col-md-12">
          <!-- TABLE: LATEST ORDERS -->
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Transaksi Hari Ini</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>No Transaksi</th>
                  <th>Nama Member</th>
                  <th>Jenis Cuci</th>
                  <th>Berat</th>
                  <th>Total Harga</th>
                  <th>Status Bayar</th>
                  <th>Detail</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                  $no = 1;
                  foreach($transaksi as $data) {
                ?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $data['id_transaksi'];?> </td>
                  <td><?php echo $data['nama_user'];?> </td>
                  <td><?php echo $data['nama_jenis'];?></td>
                  <td><?php echo $data['berat_cuci'];?></td>
                  <td>Rp .<?php echo number_format($data['total_harga']);?>,-</td>
                  <td><?php echo $data['status_bayar'];?></td>
                  <td>
                    <a href="<?php echo base_url('detail/').$data['id_transaksi'];?>" class="btn btn-primary">
                      Detail
                    </a>
                  </td>
                </tr>
                <?php } ?>
                
                </tbody>
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>No Transaksi</th>
                  <th>Nama Member</th>
                  <th>Jenis Cuci</th>
                  <th>Berat</th>
                  <th>Total Harga</th>
                  <th>Status Bayar</th>
                  <th>Detail</th>
                </tr>
                </tfoot>
              </table>
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->

        <!-- /.col -->
      </div>
      <!-- /.row -->
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
<!-- FastClick -->
<script src="<?php echo base_url();?>assets_pengelola/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets_pengelola/dist/js/adminlte.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url();?>assets_pengelola/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap  -->
<script src="<?php echo base_url();?>assets_pengelola/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url();?>assets_pengelola/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url();?>assets_pengelola/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url();?>assets_pengelola/bower_components/chart.js/Chart.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url();?>assets_pengelola/dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>assets_pengelola/dist/js/demo.js"></script>

<script src="<?php echo base_url();?>assets_pengelola/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets_pengelola/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
  })
</script>
</body>
</html>
