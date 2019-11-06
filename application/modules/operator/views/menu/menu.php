<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>assets_operator/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
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
        <li class="treeview">
          <a href="#">
             <i class="fa fa-power-off"></i>
             <span>Logout</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>