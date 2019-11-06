<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard |Operator</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets_operator/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets_operator/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets_operator/bower_components/Ionicons/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets_operator/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets_operator/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets_operator/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Dashboard</b></span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
    
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <?php $this->load->view('menu/menu') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Hari Ini
        <small>12 November 2019</small>
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
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>150</h3>

              <p>Total Transaksi</p>
            </div>
            <div class="icon">
              <i class="fa fa-shopping-cart"></i>
            </div>
            <a href="#" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>53</h3>

              <p>Transaksi Selesai</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>44</h3>

              <p>Transaksi Dalam Proses</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>65</h3>

              <p>Transaksi Batal</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Form Transaksi Laundry</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-8">
                   <div class="box box-danger">
                      <!-- <div class="box-header with-border">
                        <h3 class="box-title">Form Tambah Transaksi</h3>
                      </div> -->
                      <div class="box-body">
                        <div class="container-fluid">
                          <div class="row">
                            <div class="col-sm-6" style="background-color:;">
                              <div class="input-group input-group-sm">
                                <input type="text" class="form-control" placeholder="masukan kode member">
                                    <span class="input-group-btn">
                                      <button type="button" class="btn btn-info btn-flat">Cari</button>
                                    </span>
                              </div>
                            </div>
                            <!-- <div class="col-sm-3" style="background-color:pink;">
                              <p>Sed ut perspiciatis...</p>
                            </div> -->
                          </div>
                          <div class="row">
                            <div class="col-sm-6" style="background-color:;">
                               <div class="form-group">
                                  <label>Nama Member</label>
                                  <input type="text" class="form-control" placeholder="Nama Pelanggan">
                                </div>
                            </div>
                            <div class="col-sm-6" style="background-color:;">
                              <div class="form-group">
                                  <label>Jenis Laundry</label>
                                  <select class="form-control">
                                    <option>Dry Cleaning</option>
                                    <option>Pressing</option>
                                    <option>Laundry</option>
                                    <option>Pickup & Delivery</option>
                                  </select>
                                </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-sm-6" style="background-color:;">
                               <div class="form-group">
                                  <label>No Telepon</label>
                                  <input type="text" class="form-control" placeholder="No Telepon">
                                </div>
                            </div>
                            <div class="col-sm-6" style="background-color:;">
                               <div class="form-group">
                                  <label>Berat Cuci</label>
                                  <input type="text" class="form-control" placeholder="Berat Cuci">
                                </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-sm-6" style="background-color:;">
                               <div class="form-group">
                                  <label>Alamat</label>
                                  <textarea class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-3" style="background-color:;">
                               <div class="form-group">
                                  <label>Jenis Cucian</label>
                                  <div class="checkbox">
                                    <label>
                                      <input type="checkbox">
                                      Celana Jeans
                                    </label>
                                  </div>
                                  <div class="checkbox">
                                    <label>
                                      <input type="checkbox">
                                      Kaos
                                    </label>
                                  </div>
                                  <div class="checkbox">
                                    <label>
                                      <input type="checkbox">
                                      Jas
                                    </label>
                                  </div>
                                </div>
                            </div>
                            <div class="col-sm-3" style="background-color:;">
                               <div class="form-group">
                                  <label></label>
                                  <div class="checkbox">
                                    <label>
                                      <input type="checkbox">
                                      Sprei
                                    </label>
                                  </div>
                                  <div class="checkbox">
                                    <label>
                                      <input type="checkbox">
                                      Pakaian
                                    </label>
                                  </div>
                                  <div class="checkbox">
                                    <label>
                                      <input type="checkbox">
                                      Selimut
                                    </label>
                                  </div>
                                </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-sm-6" style="background-color:;">
                               <div class="form-group">
                                  <button type="button" class="form-control bg-maroon">Simpan Data</button>
                               </div>
                            </div>
                            <div class="col-sm-6" style="background-color:;">
                                <div class="form-group">
                                  <button type="reset" class="form-control bg-navy">Batal</button>
                               </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.box-body -->
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-md-4">
                   <div class="box">
                      <div class="box-header with-border">
                        <center><h3 class="box-title">Transaksi Hari Ini</h3></center>
                      </div>
                      <!-- /.box-header -->
                      <div class="box-body">
                        <div class="input-group input-group-sm">
                                <input type="text" class="form-control" placeholder="masukan kode member">
                                    <span class="input-group-btn">
                                      <button type="button" class="btn btn-info btn-flat">Cari</button>
                                    </span>
                              </div>
                        <table class="table table-bordered">
                          <tr>
                            <th style="width: 10px">#</th>
                            <th>Nama Member</th>
                            <th>Status</th>
                            <th style="width: 40px">Detail</th>
                          </tr>
                          <tr>
                            <td>1.</td>
                            <td>Mahmud</td>
                            <td><span class="badge bg-red">batal</span></td>
                              <td>
                                <a href="<?php echo site_url('detailTransaksi/');?>">
                                  <button type="reset" class="bg-navy">Detail</button>
                                </a>
                              </td>
                          </tr>
                          <tr>
                            <td>2.</td>
                            <td>Yayah</td>
                            <td><span class="badge bg-blue">proses</span></td>
                             <td><button type="reset" class="bg-navy">Detail</button></td>
                          </tr>
                          <tr>
                            <td>3.</td>
                            <td>Rosiana Dewi</td>
                            <td><span class="badge bg-blue">proses</span></td>
                            <td><button type="reset" class="bg-navy">Detail</button></td>
                          </tr>
                          <tr>
                            <td>4.</td>
                            <td>Umi Maryam</td>
                            <td><span class="badge bg-green">selesai</span></td>
                            <td><button type="reset" class="bg-navy">Detail</button></td>
                          </tr>
                          <tr>
                            <td>5.</td>
                            <td>Nita Angraeni</td>
                            <td><span class="badge bg-green">selesai</span></td>
                            <td><button type="reset" class="bg-navy">Detail</button></td>
                          </tr>

                        </table>
                      </div>
                      <!-- /.box-body -->
                      <div class="box-footer clearfix">
                        <ul class="pagination pagination-sm no-margin pull-right">
                          <li><a href="#">&laquo;</a></li>
                          <li><a href="#">1</a></li>
                          <li><a href="#">2</a></li>
                          <li><a href="#">3</a></li>
                          <li><a href="#">&raquo;</a></li>
                        </ul>
                      </div>
                    </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php $this->load->view("menu/footer");?>

  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url();?>assets_operator/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>assets_operator/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url();?>assets_operator/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets_operator/dist/js/adminlte.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url();?>assets_operator/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap  -->
<script src="<?php echo base_url();?>assets_operator/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url();?>assets_operator/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url();?>assets_operator/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url();?>assets_operator/bower_components/chart.js/Chart.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url();?>assets_operator/dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>assets_operator/dist/js/demo.js"></script>
</body>
</html>
