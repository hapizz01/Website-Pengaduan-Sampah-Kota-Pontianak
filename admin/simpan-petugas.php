<?php
include'../koneksi.php';
$nama=$_POST['nama_petugas'];
$username=$_POST['username'];
$password=$_POST['password'];
$telp=$_POST['telp'];
$level=$_POST['level'];

$sql="INSERT INTO petugas(nama_petugas,username,password,telp,level) VALUES('$nama','$username',
    '$password','$telp','$level')";
$query     = mysqli_query($koneksi,$sql);

if($query)
{
    ?>
    <script type="text/javascript">
        alert ('Data Berhasil Disimpan');
        window.location='admin.php?url=lihat-petugas';
    </script>
    <?php
}
?>

