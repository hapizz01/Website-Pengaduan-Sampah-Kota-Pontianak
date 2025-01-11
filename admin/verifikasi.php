<?php
$id = $_GET['id'];
if (empty($id)) {
    header("location:masyarakat.php");
}


?>
<a href="?url=verifikasi-pengaduan" class="btn btn-primary btn icon-split">
            <span class="icon text-white-5">
                <i class="fa fa-arrow-left"></i>
            </span>
            <span class="text"> Kembali </span>
        </a>
<div class="card shadow">
    <div class="card-header">
        Verifikasi
    </div>
    <div class="card-body">
        

        <form method="post" action="simpan-tanggapan.php" enctype="multipart/form-data">
            <div class="form-group">
                <label>ID Pengaduan</label>
                <input type="text" name="id_pengaduan" class="form-control" readonly value="<?php echo $_GET['id']; ?>">
            </div>
            <div class="form-group">
                <label>Tgl Verifikasi</label>
                <input type="text" name="tgl_tanggapan" class="form-control" readonly value="<?php echo date('Y-m-d'); ?>">
            </div>
            <div class="form-group">
                <label>Tulis Tanggapan</label>
                <textarea class="form-control" rows="7" name="tanggapan" ></textarea>
            </div>
            <div class="form-group">
                <label>Foto</label>
                <input type="file" required class="form-control" name="foto_tgp" accept=".jpg,.jpeg,.png,image/*">
            </div>
            <div class="form-group">
                <label>ID PETUGAS</label>
                <input type="text" name="id_petugas" value="<?php echo $_SESSION['id_petugas']; ?> " class="form-control" readonly>
            </div>
            

            <input type="submit" class="btn btn-danger" value="Verifikasi!">





        </form>
        <script type="text/javascript">
            function getlocation() {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(showPosition);
                }
            }

            function showPosition(position) {
                document.querySelector('.myForm input[name = "latitude"]').value = position.coords.latitude;
                document.querySelector('.myForm input[name = "longitude"]').value = position.coords.longitude;
            }
        </script>

    </div>
</div>