<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ asset('bower_components/admin-lte/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Alexander Pierce</p>
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- search form (Optional) -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form>
    <!-- /.search form -->

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
      <li class="header">Menu</li>
      <!-- Optionally, you can add icons to the links -->
      <li class="active"><a href="{{ url('/') }}"><i class="fa fa-desktop"></i> <span>Dashboard</span></a></li>
      <li class="treeview">
        <a href="#"><i class="fa fa-book"></i> <span>Transaksi</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-arrow-down"></i>Pembelian</a></li>
          <li><a href="#"><i class="fa fa-exchange"></i>Jurnal Pembelian</a></li>
          <li><a href="#"><i class="fa fa-arrow-up"></i>Penjualan</a></li>
          <li><a href="#"><i class="fa fa-exchange"></i>Jurnal Penjualan</a></li>  
        </ul>
      </li>
      <li></li>
      <li class="treeview">
        <a href="#"><i class="fa fa-gear"></i> <span>Master</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-child"></i>Profil</a></li>
          <li><a href="#"><i class="fa fa-smile-o"></i>Member</a></li>
          <li><a href="#"><i class="fa fa-truck"></i>Supplier</a></li>
          <li><a href="#"><i class="fa fa-cubes"></i>Barang</a></li>
          <li><a href="#"><i class="fa fa-bars"></i>Kategori Barang</a></li>
          <li><a href="#"><i class="fa fa-street-view"></i>User</a></li>
          <li><a href="#"><i class="fa fa-group"></i>Group</a></li>
        </ul>
      </li>
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">