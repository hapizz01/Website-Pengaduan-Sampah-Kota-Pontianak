<?php
include'../koneksi.php';
$id=$_GET['id'];

$sql="DELETE FROM petugas WHERE id_petugas='$id'";
    
$query     = mysqli_query($koneksi,$sql);

if($query)
{
    ?>
    <script type="text/javascript">
        alert('Data Berhasil Dihapus');
        window.location='admin.php?url=lihat-petugas';
    </script>
    <?php
}

?>