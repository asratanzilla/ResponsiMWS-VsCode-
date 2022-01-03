<?php

require_once('connection.php');

$id_buku = $_POST['id_buku'];
$judul_buku = $_POST['judul_buku'];
$nama_pengarang = $_POST['nama_pengarang'];
$tahun_terbit = $_POST['tahun_terbit'];
$penerbit = $_POST['penerbit'];

if(!$id_buku || !$judul_buku || !$nama_pengarang || !$tahun_terbit || !$penerbit){
  echo json_encode(array('message'=>'required field is empty.'));
}else{
$query = mysqli_query($conn, "UPDATE tb_data SET id_buku='$id_buku', judul_buku='$judul_buku',
nama_pengarang='$nama_pengarang', tahun_terbit='$tahun_terbit', penerbit='$penerbit' WHERE id_buku = '$id_buku'");
if($query){
    echo json_encode(array('message'=>'data successfully updated.'));
  }else{
    echo json_encode(array('message'=>'data failed to update.'));
  }
}

?>