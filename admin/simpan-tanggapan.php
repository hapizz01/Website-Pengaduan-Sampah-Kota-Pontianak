<?php
include '../koneksi.php';
$id_pengaduan=$_POST['id_pengaduan'];
$tgl_verifikasi=$_POST['tgl_tanggapan'];
$tanggapan=$_POST['tanggapan'];
$lokasi_foto   =$_FILES['foto_tgp']['tmp_name'];
$nama_foto     =$_FILES['foto_tgp']['name'];
$id_petugas=$_POST['id_petugas'];
$status='selesai';

move_uploaded_file($lokasi_foto,'../foto/'.$nama_foto);
$sql =mysqli_query ($koneksi,"INSERT INTO tanggapan(id_pengaduan,tgl_tanggapan,tanggapan,foto_tgp,id_petugas) VALUES('$id_pengaduan','$tgl_verifikasi','$tanggapan','$nama_foto','$id_petugas')");
$update_status=mysqli_query($koneksi,"UPDATE pengaduan SET status='$status' WHERE id_pengaduan='$id_pengaduan'");
    
if ($sql)
{
    ?>
    <script type="text/javascript">
        alert('Data Sudah di Tanggapi');
         window.location="admin.php?url=verifikasi-pengaduan";
    </script>
<?php
}
?>