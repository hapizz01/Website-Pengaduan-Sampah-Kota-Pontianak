<?php
require'../koneksi.php';
$sql="UPDATE pengaduan set status='proses' WHERE id_pengaduan='$_GET[id]'";
$query=mysqli_query($koneksi, $sql);
if($query)
{
    header('location:petugas.php?url=tanggapi-laporan');
}
?>