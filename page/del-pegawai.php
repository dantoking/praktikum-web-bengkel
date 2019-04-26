<?php 


require 'conn.php';

// var_dump($_GET);

$id = $_GET['id'];

 $result=mysqli_query($link,"DELETE from data_pegawai WHERE ID_PEG = '$id'");

 header('Location: ../?page=pegawai');

 echo "<script>window.location.replace('?page=pegawai');</script>";