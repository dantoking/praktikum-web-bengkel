<?php 


require '../conn.php';


var_dump($_POST);

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$id = $_POST['id'];
 
if (!empty($id)) {
 $result=mysqli_query($link,"UPDATE data_pegawai SET NM_PEG='$nama', ALMT_PEG ='$alamat' where ID_PEG ='$id'");
	
}else{

 $result=mysqli_query($link,"INSERT INTO data_pegawai (NM_PEG,ALMT_PEG) VALUES ('$nama','$alamat')");
}

 header('Location: ../?page=pegawai');