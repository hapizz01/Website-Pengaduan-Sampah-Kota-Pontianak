<?php
if(isset($_GET['url'])){
    switch ($_GET['url']) {
        case 'tulis-pengaduan':
            include 'tulis-pengaduan.php';
            # code...
            break;

        case 'lihat-pengaduan';
        include 'lihat-pengaduan.php';
        break;

        case 'detail-pengaduan';
        include 'detail-pengaduan.php';
        break;

        case 'lihat-tanggapan';
        include 'lihat-tanggapan.php';
        break;

        case 'lihat-petugas';
        include 'lihat-petugas.php';
        break;

        case 'tentang-kami';
        include 'tentang-kami.php';
        break;

        default:
            echo "Halaman tidak ditemukan";
            # code...
            break;
    }
}else{
    echo "Anda login sebagai: ".$_SESSION['nama'];

    ?>
    <section class="about_section layout_padding">
    <div class="container-fluid">
      <div class="box">
        <div class="img-box">
          <img src="img/alianyang.jpg" alt="" />
        </div>
        <div class="detail-box">
          <h2>
            Alianyang
          </h2>
          <p>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d446.26455398440964!2d109.32575528811205!3d-0.030522135046200233!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e1d59d36246e89b%3A0x7ffd69de878909d2!2sTempat%20Pembuangan%20Sampah!5e0!3m2!1sen!2sid!4v1731833730028!5m2!1sen!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </p>
          
        </div>
      </div>
    </div>
  </section>

  <section class="about_section layout_padding">
    <div class="container-fluid">
      <div class="box">
        <div class="detail-box">
          <h2>
            Ampera
          </h2>
          <p>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31918.531674772214!2d109.28174610719721!3d-0.05533932779117262!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e1d59f5a3aad6ff%3A0x7028d31fcb8ae49a!2sTempat%20pembuangan%20sampah%20ampera!5e0!3m2!1sen!2sid!4v1731834056272!5m2!1sen!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </p>
          
        </div>
        <div class="img-box">
          <img src="img/ampera.jpeg" alt="" />
        </div>
      </div>
    </div>
  </section>

  <section class="about_section layout_padding">
    <div class="container-fluid">
      <div class="box">
        <div class="img-box">
          <img src="img/suijawi.png" alt="" />
        </div>
        <div class="detail-box">
          <h2>
            Sui Jawi
          </h2>
          <p>
          <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d1740.9882583186745!2d109.311551063814!3d-0.022687473200381177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sTempat%20Pembuangan%20Sampah!5e0!3m2!1sen!2sid!4v1731834692540!5m2!1sen!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </p>
          
        </div>
      </div>
    </div>
  </section>

  



<?php
}
?>