<?php
$id=$_GET['id'];
if(empty($id)){
    header("location:masyarakat.php");
}
include'koneksi.php';
$query=mysqli_query($koneksi,"SELECT*FROM pengaduan WHERE id_pengaduan='$id'");
$data=mysqli_fetch_array($query);
if($query)
{

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

<form method="post" action="proses-pengaduan.php" enctype="multipart/form-data">
    <div class="form-group">
        <label>Tgl Pengaduan</label>
        <input type="text" name="tgl_pengaduan" class="form-control" readonly value="<?= $data['tgl_pengaduan'];?>">
    </div>
    <div class="form-group">
        <label>Lokasi</label>
        <textarea name="isi_laporan" class="form-control" readonly><?=$data['isi_laporan']?></textarea>
    </div>
    <div class="form-group cols-sm-6">
        <label>Foto</label>
        <div>
        <img class="img-tumbnail" src="foto/<?=$data['foto']?>"width=600 alt="">
        </div>
    </div>
    
    
 

    <?php } ?>
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

</div>    
</div>
