<!DOCTYPE html>
<html>
<?php include 'head.php'; ?>
<?php if (empty($_SESSION)): // header('Location: login.php'); ?>
<?php endif ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php define('BASEURL', '/bengkel'); ?>

<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>

  <div class="content-wrapper">
<?php 

require 'conn.php';

// echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
// echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;


if (isset($_GET['page'])) {
  if ($_GET['page']=='pegawai') {
  include 'page/pegawai.php';
  }else if ($_GET['page']=='tambah-pegawai') {
  include 'page/tambah-pegawai.php';
}else if ($_GET['page']=='del-pegawai') {
  include 'page/del-pegawai.php';
  }else if ($_GET['page']=='pelanggan') {
  include 'page/pelanggan.php';
  }else if ($_GET['page']=='tambah-pelanggan') {
  include 'page/tambah-pelanggan.php';
  }else if ($_GET['page']=='supplier') {
  include 'page/supplier.php';
  }else if ($_GET['page']=='tambah-supplier') {
  include 'page/tambah-supplier.php';
  }else if ($_GET['page']=='produk') {
  include 'page/produk.php';
  }else if ($_GET['page']=='tambah-produk') {
  include 'page/tambah-produk.php';
  }else if ($_GET['page']=='jasa') {
  include 'page/jasa.php';
  }else if ($_GET['page']=='tambah-jasa') {
  include 'page/tambah-jasa.php';
  }else if ($_GET['page']=='pengiriman') {
  include 'page/pengiriman.php';
  }else if ($_GET['page']=='tambah-pengiriman') {
  include 'page/tambah-pengiriman.php';
  }else if ($_GET['page']=='det-pengiriman') {
  include 'page/det-pengiriman.php';
  }else if ($_GET['page']=='del-pengiriman') {
  include 'page/del-pengiriman.php';
  }else if ($_GET['page']=='transaksi') {
  include 'page/transaksi.php';
  }else if ($_GET['page']=='tambah-transaksi') {
  include 'page/tambah-transaksi.php';
  }else if ($_GET['page']=='det-transaksi') {
  include 'page/det-transaksi.php';
  }else if ($_GET['page']=='del-transaksi') {
    include 'page/del-transaksi.php';
  }
}else{
  
  include 'content.php';
  

  }
 ?>
  
  </div>
  </div>

  <!-- Content Wrapper. Contains page content -->
  
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.

    <strong>Copyright &copy; 2019 <a href="https://adminlte.io">HARDANTO P</a>.</strong>   </footer>

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<?php include 'jsbawah.php'; ?>
<?php mysqli_close($link); ?>

</body>
</html>
