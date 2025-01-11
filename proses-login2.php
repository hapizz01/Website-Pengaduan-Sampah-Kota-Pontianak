<?php
$username        =$_POST['username'];
$password   =$_POST['password'];
include 'koneksi.php';
$sql        = "SELECT*FROM  petugas WHERE username='$username' AND password='$password'";
$querry     = mysqli_query($koneksi,$sql);


if(mysqli_num_rows($querry)>0){
    
    $data = mysqli_fetch_array($querry);
    if ($data['level']=="admin")
    {
    session_start();
    $_SESSION['id_petugas']=$data['id_petugas'];
    $_SESSION['nama_petugas']=$data['nama_petugas'];
    $_SESSION['username']=$data['username'];
    $_SESSION['level']=$data['level'];
    header("Location:admin/admin.php");

    
    }elseif ($data['level']=="petugas")
    {
    session_start();

    $_SESSION['nama_petugas']=$data['nama_petugas'];
    $_SESSION['username']=$data['username'];
    $_SESSION['level']=$data['level'];{
    header("Location:petugas/petugas.php");
    }
}else{
    echo"<script>alert('Maaf Data yang Anda Masukkan Tidak Ada');window.location.assign('index2.php');</script>";
}
}