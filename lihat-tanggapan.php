<?php
$id=$_GET['id'];
if(empty($id)){
    header("location:masyarakat.php");
}
include'koneksi.php';
$query=mysqli_query($koneksi,"SELECT*FROM pengaduan,tanggapan WHERE tanggapan.id_pengaduan='$id' AND tanggapan.id_pengaduan=pengaduan.id_pengaduan");


?>
<div class="card shadow">
<div class="card-header">
    <a href="?url=lihat-pengaduan" class="btn btn-primary btn icon-split">
        <span class="icon text-white-5">
            <i class="fa fa-arrow-left"></i>
        </span>
        <span class="text"> Kembali </span>
    </a>
</div>
<div class="card-body">
    <?php
    $cek=mysqli_num_rows($query);
    if ($cek<1){
        echo"<div class='alert alert-danger'>Maaf Pengaduan Anda Belum Ditanggapi.</div>";
    }else{
    $data=mysqli_fetch_array($query);
        
    ?>

<form method="post" action="proses-pengaduan.php" enctype="multipart/form-data">
    <div class="form-group">
        <label>Tgl Tanggapan</label>
        <input type="text" name="tgl_tanggapan" class="form-control" readonly value="<?= $data['tgl_tanggapan'];?>">
    </div>
    <div class="form-group">
        <label>Lokasi</label>
        <textarea name="isi_laporan" class="form-control" readonly><?=$data['isi_laporan']?></textarea>
    </div>
    <div class="form-group">
        <label>Tanggapan</label>
        <textarea name="tanggapan" class="form-control" readonly><?=$data['tanggapan']?></textarea>
    </div>
    <div class="form-group">
        <label>Foto</label>
        <img class="img-tumbnail" src="foto/<?=$data['foto_tgp']?>"width="300" alt="">
    </div>
    <input type="hidden" name="latitude" value="">
    <input type="hidden" name="longitude" value="">
    
 


</form>
<script type="text/javascript">
    function getlocation(){
        if(navigator.geolocation){
            navigator.geolocation.getCurrentPosition(showPosition);
        }
    }
    function showPosition(position){
        document.querySelector('.myForm input[name = "latitude"]').value=position.coords.latitude;
        document.querySelector('.myForm input[name = "longitude"]').value=position.coords.longitude;
    }
</script>
<?php } ?>
</div>    
</div>