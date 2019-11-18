<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard |Admin</title>
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
  <link rel="stylesheet" href="<?php echo base_url();?>assets_pengelola/css/jquery-ui.css">

  <link rel="stylesheet" href="<?php echo base_url();?>assets_pengelola/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

 
  <?php $this->load->view('menu/header') ?>

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
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-aqua">
            <span class="info-box-icon"><i class="fa fa-bookmark-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Jumlah Transaksi</span>
              <span class="info-box-number">41,410</span>

              <div class="progress">
                <div class="progress-bar" style="width: 70%"></div>
              </div>
                  <span class="progress-description">
                    Jumlah dalam 30 hari
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-green">
            <span class="info-box-icon"><i class="fa fa-thumbs-o-up"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Transaksi Selesai</span>
              <span class="info-box-number">41,410</span>

              <div class="progress">
                <div class="progress-bar" style="width: 70%"></div>
              </div>
                  <span class="progress-description">
                    Jumlah dalam 30 hari
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-yellow">
            <span class="info-box-icon"><i class="fa fa-calendar"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Transaksi Proses</span>
              <span class="info-box-number">41,410</span>

              <div class="progress">
                <div class="progress-bar" style="width: 70%"></div>
              </div>
                  <span class="progress-description">
                   Jumlah dalam 30 hari
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-red">
            <span class="info-box-icon"><i class="fa fa-comments-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Transaksi Batal</span>
              <span class="info-box-number">41,410</span>

              <div class="progress">
                <div class="progress-bar" style="width: 70%"></div>
              </div>
                  <span class="progress-description">
                    Jumlah dalam 30 hari
                  </span>
            </div>
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
              <h3 class="box-title">Form Transaksi Laundry</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-8">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Cuci Kiloan</a></li>
              <li><a href="#timeline" data-toggle="tab">Cuci Satuan</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->
                <div class="box-body">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-sm-6" style="background-color:;">
                        <form>
                          <div >
                            <input type="text" id="no_telepon" class="form-control" placeholder="masukan kode member">
                              <!-- <span class="input-group-btn">
                                  <button type="button" class="btn btn-info btn-flat">Cari</button>
                              </span> -->
                            </div>
                          </div>
                        </form>
                      </div>
                      <form action="<?php echo base_url('transaksi');?>" method="post">
                        <div class="row">
                          <div class="col-sm-6" style="background-color:;">
                            <div class="form-group">
                              <label>Nama Member</label>
                                <input type="hidden" name="id_user" class="form-control" value="5">
                                <input type="text"  name="nama_user" id="nama_user"class="form-control" placeholder="Nama Pelanggan">
                              </div>
                            </div>
                              <div class="col-sm-6" style="background-color:;">
                               <div class="form-group">
                                  <label>Jenis Laundry</label>
                                  <select name="id_jenis_cuci"class="form-control" >
                                    <option>-Pilih Paket Laundry</option>
                                    <?php foreach($jenis as $row): ?>
                                    <option value="<?php echo $row['id_jenis_cuci'];?>">
                                      <?php echo $row['nama_jenis'];?> 
                                    </option>
                                   <?php endforeach ;?>
                                  </select>
                                </div>
                            </div>
                          </div>
                           <div class="row">
                            <div class="col-sm-6" style="background-color:;">
                               <div class="form-group">
                                  <label>No Telepon</label>
                                  <input type="text" name="no_telepon" id="no_telepon" class="form-control" placeholder="No Telepon">
                                </div>
                            </div>
                            <div class="col-sm-6" style="background-color:;">
                               <div class="form-group">
                                  <label>Berat Cuci</label>
                                  <input type="text" name="berat_cuci" class="form-control" placeholder="Berat Cuci">
                                </div>
                            </div>
                          </div>
                           <div class="row">
                            <div class="col-sm-6" style="background-color:;">
                               <div class="form-group">
                                  <label>Alamat</label>
                                  <textarea name="alamat" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6" style="background-color:;">
                              <div class="form-group">
                                  <label>Jumlah Cucian</label>
                                  <input type="hidden" name="id_operator" class="form-control" value="5">
                                  <input type="text" name="jumlah_cucian" class="form-control" placeholder="Jumlah Cucian">
                                </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-sm-6" style="background-color:;">
                               <div class="form-group">
                                  <button type="submit" class="form-control bg-maroon">Simpan Data</button>
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
                    </form>
                <!-- /.post -->
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="timeline">
                <!-- The timeline -->
                <ul class="timeline timeline-inverse">
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-red">
                          10 Feb. 2014
                        </span>
                  </li>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-envelope bg-blue"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                      <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                      <div class="timeline-body">
                        Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                        weebly ning heekya handango imeem plugg dopplr jibjab, movity
                        jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                        quora plaxo ideeli hulu weebly balihoo...
                      </div>
                      <div class="timeline-footer">
                        <a class="btn btn-primary btn-xs">Read more</a>
                        <a class="btn btn-danger btn-xs">Delete</a>
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-user bg-aqua"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>

                      <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request
                      </h3>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-comments bg-yellow"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>

                      <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                      <div class="timeline-body">
                        Take me to your leader!
                        Switzerland is small and neutral!
                        We are more like Germany, ambitious and misunderstood!
                      </div>
                      <div class="timeline-footer">
                        <a class="btn btn-warning btn-flat btn-xs">View comment</a>
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-green">
                          3 Jan. 2014
                        </span>
                  </li>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-camera bg-purple"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>

                      <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                      <div class="timeline-body">
                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <li>
                    <i class="fa fa-clock-o bg-gray"></i>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
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

<script src="<?php echo base_url();?>assets_pengelola/js/jquery-ui.js" type="text/javascript"></script>
 <!--<script type="text/javascript">
  $(document).ready(function(){
    $("#no_telepon").autocomplete({
      source : "<?php echo site_url('pengelola/Pengelola_c/getDataMember/?');?>"
    });
  });
</script>-->
<script type="text/javascript">
  $(document).ready(function(){
    $('#no_telepon').on('input',function(){
      var no_telepon = $(this).val();
      $.ajax({
        type : "POST",
        url : "<?php echo base_url('pengelola/Pengelola_c/getDetailMember?no_telepon=');?>"+no_telepon,
        dataType : "JSON",
        data :{no_telepon:no_telepon},
        cache:false,
        success:function(data){
          $.each(data,function(id_user,no_telepon, nama_user){
              $('[name="id_user"]').val(data.id_user);
              $('[name="nama_user"]').val(data.nama_user);
              $('[name="no_telepon"]').val(data.no_telepon);
              $('[name="alamat"]').val(data.alamat);
          });
        }
      });
      return false;
    });
  });
</script>
</body>
</html>
