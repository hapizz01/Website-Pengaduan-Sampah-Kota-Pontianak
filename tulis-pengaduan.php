
<div class="card shadow">
        <div class="card-header">
            <a href="masyarakat.php" class="btn btn-primary btn icon-split">
                <span class="icon text-white-5">
                    <i class="fa fa-arrow-left"></i>
                </span>
                <span class="text"> Kembali </span>
            </a>
        </div>


    <div class="card-body" >

        <form method="post" action="proses-pengaduan.php" enctype="multipart/form-data">
            <div class="form-group">
                <label>Tgl Pengaduan</label>
                <input type="text" name="tgl_pengaduan" class="form-control" readonly value="<?= date('Y-m-d'); ?>">
            </div>
            <div class="form-group">
                <label>Tuliskan detail lokasi yang terdapat sampah</label>
                <textarea name="isi_laporan" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label>Foto</label>
                <input type="file" required class="form-control" name="foto" accept="image/*">
            </div>
            <input type="hidden" name="latitude" value="">
            <input type="hidden" name="longitude" value=""> <br><br>
            <div class="form-group">
                <button type="submit" class="btn btn-success"> SIMPAN </button>
            </div>



        </form>
        <script type="text/javascript">
            function getlocation() {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(showPosition, showError);
                }
            }

            function showPosition(position) {
                document.querySelector('.myForm input[name = "latitude"]').value = position.coords.latitude;
                document.querySelector('.myForm input[name = "longitude"]').value = position.coords.longitude;
            }

            function showError(error) {
                switch (error.code) {
                    case error.PERMISSION_DENIED:
                        alert("You Must Allow The req");
                        location.reload();
                        break;
                }
            }
        </script>

    </div>
    </div>


