<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Laundry | Data Transaksi</title>
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
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets_pengelola/plugins/iCheck/flat/blue.css">
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
<div class="wrapper">

<?php  $this->load->view("menu/menu");?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Laundry 
        <small>13 Transaksi</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Mailbox</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Pesanan Laundry Online</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
             <table id="example1" class="table table-bordered table-striped">
                          <thead>
                          <tr>
                            <th>No</th>
                            <th>No Transaksi</th>
                            <th>Status</th>
                            <th>Harga</th>
                            <th>Detail</th>
                          </tr>
                          </thead>
                          <tbody>

                          <?php 
                            $no = 1;
                            foreach($online as $data) {
                           ?>
                          <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $data['id_transaksi'];?></td>
                            <td><?php echo $data['status_cucian'];?></td>
                            <td>Rp. <?php echo number_format($data['total_harga']);?></td>
                            <td>
                              <a data-toggle="modal" data-target="#modal-default<?php echo $data['id_transaksi'];?>">
                                <button>Detail</button>
                              </a>
                            </td>
                          </tr>
                          <?php } ?>
                          
                          </tbody>
                          <tfoot>
                          <tr>
                            <th>No</th>
                            <th>No Transaksi</th>
                            <th>Status</th>
                            <th>Harga</th>
                            <th>Detail</th>
                          </tr>
                          </tfoot>
                        </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <?php foreach($online as $data): ?>
       <div class="modal fade" id="modal-default<?php echo $data['id_transaksi'];?>">

          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Detail Pesanan Online</h4>
              </div>
              <div class="modal-body">
                   <form action="<?php echo base_url('editPesananOlineOperator');?>" method="post" role="form">
                      <div class="box-body">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Nama Member</label>
                        <input class="form-control" type="hidden" name="id_transaksi" value="<?php echo $data['id_transaksi'];?>" />
                        <input class="form-control" type="hidden" name="id_member" value="<?php echo $data['id_member'];?>" />
                        <input class="form-control" type="hidden" name="id_operator" value="<?php echo $this->session->userdata("id_user"); ?>" />
                        <input class="form-control"
                          type="text" name="nama_user"  value="<?php echo $data['nama_user'];?>" readonly/>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">No Telepon</label>
                        <input class="form-control"
                          type="text" name="no_telepon" value="<?php echo $data['no_telepon'];?>" readonly/>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Jumlah Cucian</label>
                        <input class="form-control"
                          type="text" name="jumlah_cucian" value="<?php echo $data['jumlah_cucian'];?>" required/>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Berat Cuci</label>
                        <input class="form-control"
                          type="text" name="berat_cuci" value="<?php echo $data['berat_cuci'];?>" required/>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Jenis Loundry</label>
                        <select name="id_jenis"class="form-control select2" style="width: 100%;">
                          <option value="<?php echo $data['id_jenis'];?>"><?php echo $data['nama_jenis'];?></option>
                          <option>-Pilih Paket Laundry</option>
                          <?php foreach($jenis as $row): ?>
                          <option value="<?php echo $row['id_jenis_cuci'];?>">
                           <?php echo $row['nama_jenis'];?> 
                          </option>
                          <?php endforeach ;?>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Alamat</label>
                        <textarea class="form-control" name="message">
                          <?php echo $data['alamat'];?>
                        </textarea>
                      </div>
                      <div class="form-group">
                        <input type="submit" class="btn bg-maroon btn-flat margin" value="Simpan Data">
                        <!-- <input type="reset" class="btn bg-purple btn-flat margin" value="Batal"> -->
                      </div>
                      </div>
                   </form>
                  </div>
            </div>
          </div>
        </div>
      <?php endforeach;?>
  <!-- /.content-wrapper -->
  <?php $this->load->view("menu/footer");?>

 
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url();?>assets_pengelola/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>assets_pengelola/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url();?>assets_pengelola/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url();?>assets_pengelola/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets_pengelola/dist/js/adminlte.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url();?>assets_pengelola/plugins/iCheck/icheck.min.js"></script>

<script src="<?php echo base_url();?>assets_pengelola/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets_pengelola/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- Page Script -->
<script>
  $(function () {
    //Enable iCheck plugin for checkboxes
    //iCheck for checkbox and radio inputs
    $('.mailbox-messages input[type="checkbox"]').iCheck({
      checkboxClass: 'icheckbox_flat-blue',
      radioClass: 'iradio_flat-blue'
    });

    //Enable check and uncheck all functionality
    $(".checkbox-toggle").click(function () {
      var clicks = $(this).data('clicks');
      if (clicks) {
        //Uncheck all checkboxes
        $(".mailbox-messages input[type='checkbox']").iCheck("uncheck");
        $(".fa", this).removeClass("fa-check-square-o").addClass('fa-square-o');
      } else {
        //Check all checkboxes
        $(".mailbox-messages input[type='checkbox']").iCheck("check");
        $(".fa", this).removeClass("fa-square-o").addClass('fa-check-square-o');
      }
      $(this).data("clicks", !clicks);
    });

    //Handle starring for glyphicon and font awesome
    $(".mailbox-star").click(function (e) {
      e.preventDefault();
      //detect type
      var $this = $(this).find("a > i");
      var glyph = $this.hasClass("glyphicon");
      var fa = $this.hasClass("fa");

      //Switch states
      if (glyph) {
        $this.toggleClass("glyphicon-star");
        $this.toggleClass("glyphicon-star-empty");
      }

      if (fa) {
        $this.toggleClass("fa-star");
        $this.toggleClass("fa-star-o");
      }
    });
  });
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
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>assets_pengelola/dist/js/demo.js"></script>
</body>
</html>
