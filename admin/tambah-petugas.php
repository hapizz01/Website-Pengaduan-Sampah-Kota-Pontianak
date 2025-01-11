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
        Tambah Petugas
    </div>

<form method="post" action="simpan-petugas.php" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nama Petugas</label>
        <input type="text" name="nama_petugas" class="form-control"  >
    </div>
    <div class="form-group">
        <label>Username</label>
        <input type="text" name="username" class="form-control"  >
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="text" name="password" class="form-control"  >
    </div>
    <div class="form-group">
        <label>Telp</label>
        <input type="text" name="telp" class="form-control"  >
    </div>
    <div class="form-group">
        <label>Level</label>
        <select type="text" name="level">
            <option>Pilih Level</option>
            <option value="admin">Admin</option>
            <option value="petugas">Petugas</option>
        </select>
    </div>
    
    <input type="hidden" name="latitude" value="">
    <input type="hidden" name="longitude" value="">
    <div class="form-group">
        <button type="submit" class="btn btn-success"> SIMPAN </button>
    </div>
 


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