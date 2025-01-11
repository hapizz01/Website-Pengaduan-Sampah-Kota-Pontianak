<?php
if(isset($_GET['url'])){
    switch ($_GET['url']) {
       

        case 'tanggapi-laporan';
        include 'tanggapi-laporan.php';
        break;
        
        case 'detail-pengaduan';
        include 'detail-pengaduan.php';
        break;
        

        default:
            echo "Halaman tidak ditemukan";
            # code...
            break;
    }
}else
{
    ?>
    Selamat Datang di Aplikasi Pengaduan Sampah <br><br>
    Anda Login Sebagai: <h2><b> <?php echo $_SESSION['nama_petugas'];
    require'../koneksi.php';
    $query=mysqli_query($koneksi,"SELECT*FROM pengaduan WHERE status='0'");
    if($cek=mysqli_num_rows($query))
    {

    ?>

    <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Pengaduan:</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Ada <?php echo $cek;?> Laporan dari Masyarakat</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-4x text-gray-300"></i>
                      <span class="badge badge-danger badge-counter"><?php echo $cek;?></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

<?php
}}
?>  

