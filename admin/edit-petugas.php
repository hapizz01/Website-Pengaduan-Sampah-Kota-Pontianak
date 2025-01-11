<div class="card shadow">
<div class="card-header">
    <a href="?url=lihat-petugas" class="btn btn-primary btn icon-split">
        <span class="icon text-white-5">
            <i class="fa fa-arrow-left"></i>
        </span>
        <span class="text"> Kembali </span>
    </a>
</div>
<div class="card-body">

    <div class="card-header">
        Edit Data Petugas
    </div>
<?php 
$id=$_GET['id'];
include'../koneksi.php';
$query=mysqli_query($koneksi,"SELECT*FROM petugas WHERE id_petugas='$id'");
$data=mysqli_fetch_array($query);
if($query)
{
?>
<form method="post" action="update-petugas.php" enctype="multipart/form-data">
    <div class="form-group">
        <label>ID Petugas</label>
        <input type="text" name="id_petugas" value="<?php echo $data['id_petugas']; ?>" class="form-control" readonly  >
    </div>
    <div class="form-group">
        <label>Nama Petugas</label>
        <input type="text" name="nama_petugas" value="<?php echo $data['nama_petugas']; ?>" class="form-control"  >
    </div>
    <div class="form-group">
        <label>Username</label>
        <input type="text" name="username" value="<?php echo $data['username']; ?>" class="form-control"  >
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="text" name="password" value="<?php echo $data['password']; ?>" class="form-control"  >
    </div>
    <div class="form-group">
        <label>Telp</label>
        <input type="text" name="telp" value="<?php echo $data['telp']; ?>" class="form-control"  >
    </div>
    <div class="form-group">
        <label>Level</label>
        <select type="text"  name="level">
            <option value="<?php echo $data['level']; ?>" ><?php echo $data['level']; ?></option>
            <option value="admin">Admin</option>
            <option value="petugas">Petugas</option>
        </select>
    </div>
    
    <input type="hidden" name="latitude" value="">
    <input type="hidden" name="longitude" value="">
    <div class="form-group">
        <button type="submit"  class="btn btn-success">Edit Data</button>
    </div>
 


</form>
<?php } ?>
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