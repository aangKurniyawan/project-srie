<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Laundry | Invoice</title>
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
        Invoice
      <!--   <small><?php  echo $data['id_transaksi'];?> </small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Invoice</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="invoice">
       <?php if ($this->session->flashdata('tidakUpdate')): ?>
        <div class="alert alert-danger" role="alert">
          <?php echo $this->session->flashdata('tidakUpdate'); ?>
        </div>
      <?php endif ?>
       <?php if ($this->session->flashdata('bayar')): ?>
        <div class="alert alert-danger" role="alert">
          <?php echo $this->session->flashdata('bayar'); ?>
        </div>
      <?php endif ?>
      <?php if ($this->session->flashdata('selesai')): ?>
        <div class="alert alert-danger" role="alert">
          <?php echo $this->session->flashdata('selesai'); ?>
        </div>
      <?php endif ?>
      <?php if ($this->session->flashdata('belumBayar')): ?>
        <div class="alert alert-danger" role="alert">
          <?php echo $this->session->flashdata('belumBayar'); ?>
        </div>
      <?php endif ?>
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-globe"></i>Bukti Transaksi
           <!--  <small class="pull-right">Tanggal: 2/10/2014</small> -->
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <?php  foreach($userLimit as $member ):?>
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
         OPERATOR
          <address>
            <strong><?php  echo $member['nama_operator'];?></strong><br>
            Phone: <?php  echo $member['no_operator'];?><br>
            Email: <?php  echo $member['email_operator'];?>
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          Member
          <address>
            <strong><?php  echo $member['nama_member'];?></strong><br>
            Phone: <?php  echo $member['no_member'];?><br>
            Email: <?php  echo $member['email_member'];?><br>
            Address : <?php  echo $member['alamat_member'];?>
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          <b>Invoice</b><br>
          <br>
          <b>Status Pembayaran:</b> <?php  echo $member['status_bayar'];?><br>
          <b>Status Pengerjaan:</b> <?php  echo $member['status_cucian'];?><br>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    <?php endforeach ;?>
      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
              <th>No</th>
              <th>No Transaksi</th>
              <th>Nama Paket</th>
              <th>Jumlah Cucian</th>
              <th>Berat Cuci</th>
              <th>Harga/KG</th>
              <th>Total Harga</th>
            </tr>
            </thead>
            <tbody>
            <?php  foreach($transaksi as $data ):?>
            <tr>
              <td>1</td>
              <td><?php  echo $data['id_transaksi'];?></td>
              <td><?php  echo $data['nama_jenis'];?></td>
              <td><?php  echo $data['jumlah_cucian'];?></td>
              <td><?php  echo $data['berat_cuci'];?> Kg</td>
              <td>Rp.<?php  echo number_format($data['harga']) ;?>,-</td>
              <td>Rp.<?php  echo number_format($data['total_harga']) ;?>,-</td>
            </tr>
            <?php endforeach ;?>
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <!-- accepted payments column -->
        <div class="col-xs-6">
          <p class="lead">Perhatian:</p>
          <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
            Transaksi yang sudah dibayarkan tidak bisa dibatalkan!

          </p>
        </div>
        <!-- /.col -->

        <div class="col-xs-6">
          <?php foreach($transaksi as $sum): ?>
          <div class="table-responsive">
            <form action="<?php echo base_url('updateTransaksi');?>" method="post">
            <table class="table">
              <tr>
                <th style="width:25%">Subtotal:</th>
                <td>Rp.</td>
                <td>
                    <input type="text" name="total_biaya"  value="<?php echo number_format($sum['total_harga']) ;?>"  onkeyup="sum();" class="form-control"  readonly>
                    <input type="hidden"  id="txt1" value="<?php echo $sum['total_harga'] ;?>"  onkeyup="sum();" class="form-control"  readonly>
                    <input type="hidden" name="id_transaksi" value="<?php echo $sum['id_transaksi'] ;?>"  class="form-control"  readonly>
               </td>
              </tr>
              <?php foreach($status as $data):
                  $status_cucian = $data['status_bayar'];
                  $status_cucian = $data['status_cucian'];
              ?>
              <tr>
                <th>Jumlah Bayar</th>
                <td>Rp.</td>
                <td>
                  <input type="hidden" name="status_bayar" value="<?php echo $data['status_bayar'] ;?>"  class="form-control"  readonly>
                  <input type="hidden" name="status_cucian" value="<?php echo $data['status_cucian'] ;?>"  class="form-control"  readonly>
                  <?php if($status_cucian == "Lunas" || $status_cucian == "Dalam Pengerjaan" 
                    || $status_cucian == "Transaksi Batal"  || $status_cucian == "Selesai Pengerjaan" ){
                    echo "<input type='text' value='$data[jumlah_pembayaran]' name='jumlah_pembayaran' id='txt2' class='form-control' onkeyup='sum();'readonly >";
                  }else{
                     echo "<input type='text' name='jumlah_pembayaran' id='txt2' class='form-control' onkeyup='sum();' required>";
                  } 
                ?>
                </td>
              </tr>
              <tr>
                <th>Kembalian:</th>
                <td>Rp.</td>
                <td>
                  <?php if($status_cucian == "Lunas"){
                      echo " <input type='text'value='$data[sisa_bayar]' name='sisa_bayar' id='txt3' class='form-control' readonly>";
                    }else{
                      echo " <input type='text' name='sisa_bayar' id='txt3' class='form-control' readonly>";
                    }
                  ?>
                </td>
              </tr>
            <?php endforeach;?>
            </table>
          </div>
        
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
          
          <?php
          $statusCuci = $data['status_cucian'];
          if($statusCuci == "Transaksi Batal"){
            echo "
            <button type='submit' name='batal' class='btn btn-danger pull-right' style='margin-right: 5px;'disabled>
            <i class='fa fa-credit-card'></i> Batalkan Transaksi
            </button>
            <button type='submit'  name='selesai' class='btn btn-primary pull-right' 
            style='margin-right: 5px;'disabled>
            <i class='fa fa-download'></i> Selesai Cuci
            </button>
            <button type='submit' name='bayar' class='btn btn-success pull-right' style='margin-right: 5px;' disabled>
            <i class='fa fa-credit-card'></i> Simpan Pembayaran
            </button>";
          }else if($statusCuci == "Disimpan"){
             echo "
              <button type='submit' name='batal' class='btn btn-danger pull-right' style='margin-right: 5px;' disabled>
              <i class='fa fa-credit-card'></i> Batalkan Transaksi
              </button>
              <button type='submit'  name='selesai' class='btn btn-primary pull-right' 
              style='margin-right: 5px;'disabled>
              <i class='fa fa-download'></i> Selesai Cuci
              </button>
              <button type='submit' name='bayar' class='btn btn-success pull-right' style='margin-right: 5px;'>
              <i class='fa fa-credit-card'></i> Simpan Pembayaran
              </button>";
          }else if( $statusCuci == "Selesai Pengerjaan"){
             echo "
              <button type='submit' name='batal' class='btn btn-danger pull-right' style='margin-right: 5px;' disabled>
              <i class='fa fa-credit-card'></i> Batalkan Transaksi
              </button>
              <button type='submit'  name='selesai' class='btn btn-primary pull-right' 
              style='margin-right: 5px;'disabled>
              <i class='fa fa-download'></i> Selesai Cuci
              </button>
              <button type='submit' name='bayar' class='btn btn-success pull-right' style='margin-right: 5px;' disabled>
              <i class='fa fa-credit-card'></i> Simpan Pembayaran
              </button>";
          }else if($statusCuci == "Dalam Pengerjaan"){
             echo "
              <button type='submit' name='batal' class='btn btn-danger pull-right' style='margin-right: 5px;' disabled>
              <i class='fa fa-credit-card'></i> Batalkan Transaksi
              </button>
              <button type='submit'  name='selesai' class='btn btn-primary pull-right' 
              style='margin-right: 5px;'>
              <i class='fa fa-download'></i> Selesai Cuci
              </button>
              <button type='submit' name='bayar' class='btn btn-success pull-right' style='margin-right: 5px;' disabled>
              <i class='fa fa-credit-card'></i> Simpan Pembayaran
              </button>";
          }

          ?>
          
          
          
        </div>
      </div>
      <?php endforeach ;?>
      </form>
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
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

<script>
function sum() {
      var txtFirstNumberValue = document.getElementById('txt1').value;
      var txtSecondNumberValue = document.getElementById('txt2').value;
      var result = parseInt(txtFirstNumberValue) - parseInt(txtSecondNumberValue);
      if (!isNaN(result)) {
         document.getElementById('txt3').value = result;
      }
}
</script>
</body>
</html>
