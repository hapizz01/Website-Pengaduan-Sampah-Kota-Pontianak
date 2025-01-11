<?php
include'../koneksi.php';
$nama=$_POST['nama_petugas'];
$username=$_POST['username'];
$password=$_POST['password'];
$telp=$_POST['telp'];
$level=$_POST['level'];
$id=$_POST['id_petugas'];

$sql="UPDATE petugas SET nama_petugas='$nama',username='$username',password='$password',telp='$telp',level='$level' WHERE id_petugas='$id'";
$query     = mysqli_query($koneksi,$sql);

if($query)
{
    ?>
    <script type="text/javascript">
        alert ('Data Berhasil Diubah');
        window.location='admin.php?url=lihat-petugas';
    </script>
    <?php
}
?>

