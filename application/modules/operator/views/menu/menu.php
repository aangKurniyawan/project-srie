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
        <li class="">
          <a href="<?php echo site_url('operator/');?>">
            <i class="fa fa-edit"></i>
            <span>Transaksi</span>
          </a>
        </li>
        <li class="">
          <a href="<?php echo site_url('dataTransaksi/');?>">
             <i class="fa fa-laptop"></i>
             <span>Data Transaksi</span>
          </a>
        </li>
        <li class="">
          <a href="<?php echo site_url('profileOperator/');?>">
             <i class="fa fa-male"></i>
             <span>Profil Saya</span>
          </a>
        </li>
        <li class="">
          <a href="<?php echo base_url('logout');?>">
             <i class="fa fa-power-off"></i>
             <span>Logout</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>