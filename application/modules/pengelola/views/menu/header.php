
  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b></span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url();?>assets_pengelola/image/user_image/<?php echo $this->session->userdata("foto"); ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $this->session->userdata("nama_user"); ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url();?>assets_pengelola/image/user_image/<?php echo $this->session->userdata("foto"); ?>" class="img-circle" alt="User Image">

                <p>
                  <?php echo $this->session->userdata("nama_user"); ?>
                  <small><?php echo $this->session->userdata("level"); ?></small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo base_url('profilePengelola/').$this->session->userdata("id_user");?>" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url('logout');?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>assets_pengelola/image/user_image/<?php echo $this->session->userdata("foto"); ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata("nama_user"); ?></p>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="active menu-open">
          <a href="<?php echo base_url('pengelola') ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('menuTransaksi') ?>">
            <i class="fa fa-th"></i> <span>Transaksi</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('dataPesanOnline') ?>">
            <i class="fa fa-th"></i> <span>Data Pesanan Online</span>
          </a>
        </li>
        <li class="">
          <a href="<?php echo base_url('menuUser') ?>">
            <i class="fa fa-files-o"></i>
            <span>Data User</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Data Laundry</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('menuService') ?>"><i class="fa fa-circle-o"></i> Jenis Cuci</a></li>
            <li><a href="<?php echo base_url('menuProfile') ?>"><i class="fa fa-circle-o"></i> Profil Outlet</a></li>
            <!-- <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> Manajemen Konten Home</a></li> -->
          </ul>
        </li>
         <li class="">
          <a href="<?php echo base_url('dataFeedback/');?>">
            <i class="fa fa-laptop"></i>
            <span>Data Feedback</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        <li class="">
          <a href="<?php echo base_url('profilePengelola/').$this->session->userdata("id_user");?>">
            <i class="fa fa-laptop"></i>
            <span>Profile</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        <li class="">
          <a href="<?php echo base_url('logout/');?>">
            <i class="fa fa-edit"></i> <span>Logout</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>