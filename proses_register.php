<?php

$nik        =$_POST['nik'];
$nama       =$_POST['nama'];
$username   =$_POST['username'];
$password   =$_POST['password'];
$telp       =$_POST['telp'];

include 'koneksi.php';

$sql        = "INSERT INTO masyarakat(nik,nama,username,password, telp) VALUES('$nik','$nama','$username','$password','$telp')";

$querry     = mysqli_query($koneksi,$sql);

if($querry){
    echo"<script>alert('Anda Berhasil Mendaftar.'); window.location.assign('index.php');</script>";
}else{    
    echo"<script>alert('Anda Gagal Mendaftar.');window.location.assign('register.php');</script>";
}