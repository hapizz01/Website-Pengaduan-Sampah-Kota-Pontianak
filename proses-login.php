<?php
$nik        =$_POST['nik'];
$password   =$_POST['password'];
include 'koneksi.php';
$sql        = "SELECT*FROM  masyarakat WHERE nik='$nik' AND password='$password'";

$querry     = mysqli_query($koneksi,$sql);

var_dump($querry);
if(mysqli_num_rows($querry)>0){
    session_start();
    $_SESSION['nik']=$nik;
    $data = mysqli_fetch_array($querry);
    $_SESSION['nama']=$data['nama'];
    $_SESSION['username']=$username['username'];

    header("Location:masyarakat.php");
}else{
    echo"<script>alert('Maaf Data yang Anda Masukkan Tidak Ada');window.location.assign('index.php');</script>";
}
