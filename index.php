<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masjid Al-Ikram</title>
    <link href='https://fonts.googleapis.com/css?family=Epilogue' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Be Vietnam Pro' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
  <nav>
      <div class="header_logo">
        <img src="img/logowikrama.png" alt="Gambar" srcset="">
        <p class="tag">
          SMK WIKRAMA <br> BOGOR
        </p>
      </div>
      <div class="header_links">
        <ul class="nav_links">
          <li class="nav_link"><a href="#beranda" class="page-scroll">Beranda</a></li>
          <li class="nav_link"><a href="#carawakof">Cara wakaf</a></li>
          <li class="nav_link"><a href="#datawakaf" class="page-scroll">Data wakaf</a></li>
          <li class="nav_link"><a href="#gallery" class="page-scroll">Gallery</a></li>
        </ul>
      </div>
  </nav>
</header>

<section class="margin-top-15">
  <div class="container">
    <div class="gap-56">
      <div class="gap-25">
        <p class="text-utama margin-0">Masjid Besar SMK Wikrama Bogor</p>
        <h1 class="black-text margin-0">Mari <span class="tx-blue">Tingkatkan</span> <br> <span class="tx-blue">Keimanan </span>Masyarakat <br> SMK Wikrama Bogor. </h1>
      </div>
      <div>
        <button class="btn btn-blue btn-medium" onclick="openPopup()">Beri Bantuan Sodaqoh</button>
      </div>
    </div>
    <div class="align-self-center position-relative">
      <div class="img-masjid-logo">
        <img src="img/logowikrama.png" alt="Logo">
      </div>
      <div class="img-masjid">
        <img src="img/imgdas.png" alt="">
      </div>
      
      <div class="group-icon">
        <div class="grid">
          <img src="img/vector.png" alt="Logo" class="card-logo">
          <h3>Lingkungan Terjaga.</h3>
        </div>
        <div class="grid">
          <img src="img/out.png" alt="Logo" class="card-logo">
          <h3>Kapasitas Besar.</h3>
        </div>
        <div class="grid">
          <img src="img/vector.png" alt="Logo" class="card-logo">
          <h3>Al-Qur'an Gratis.</h3>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- <section>
  <div id="popup" class="popup-card">
    <center>
      <h1>Bantuan Shodaqoh</h1>
        <form action="insert.php" method="post">
          <p>
            <label for="Nama">Nama:</label>
            <input class="forminputt" type="text" name="nama" id="firstName">
          </p>
          <p>
            <label for="ID">ID:</label>
            <input class="forminputt" type="text" name="id" id="lastName">
          </p>
          <p>
            <label for="Paket">Paket:</label>
            <select class="forminputt" name="paket" id="Paket">
              <option value="Paket1">Paket 1</option>
              <option value="Paket2">Paket 2</option>
              <option value="Paket3">Paket 3</option>
            </select>
          </p>
          <p>
            <label for="Kategori">Kategori:</label>
            <select class="forminputt" name="kategori" id="Kategori">
              <option value="Barang">Barang</option>
              <option value="Uang">Uang</option>
            </select>
          </p>
          <p>
            <label for="Nominal">Nominal:</label>
            <input class="forminputt" type="text" name="nominal" id="emailAddress">
          </p>
          <input type="submit" value="Submit">
        </form>
        <button onclick="closePopup()" style="margin-top:10px !important;">Tutup</button>
    </center>
  </div> -->
  
  <!-- Overlay -->
  <!-- <div id="overlay" class="overlay"></div>
  
    
  <?php
    // Koneksi ke database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "masjidwik";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Koneksi database gagal: " . $conn->connect_error);
    }

    // Mengambil data donasi dari tabel sodakoh
    $sql = "SELECT SUM(REPLACE(nominal, '.', '')) AS total_donasi, COUNT(*) AS jumlah_donatur FROM sodakoh";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $total_donasi = $row["total_donasi"];
        $jumlah_donatur = $row["jumlah_donatur"];
    } else {
        $total_donasi = 0;
        $jumlah_donatur = 0;
    }

    // Menentukan target donasi
    $target_donasi = 200000000; // 200 juta

    // Menghitung persentase donasi terkumpul
    $persentase = ($total_donasi / $target_donasi) * 100;

    // Menghitung lebar bar progress
    $bar_width = $persentase * 3;
    
    // 3 adalah faktor untuk mengatur lebar

    $sql = "SELECT * FROM sodakoh";
    $result = $conn->query($sql);
    $scrolling_text = "";

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $nama = $row["nama"];
            $nominal = $row["nominal"];
            $kategori = $row["kategori"];

            $scrolling_text .= "$nama - $kategori : Rp. " . "number_format($nominal)" . "  •  ";
        }
    }
    ?>

  <div class="card-info">
    <div class="donation-info">
      <p>Total Donasi</p> <br> <h1> <?php echo $jumlah_donatur; ?> orang</h1>
    </div>
    <div class="donation-info1">
      <p>Total Dana Terkumpul</p> <br> <h1> Rp. <?php echo number_format($total_donasi); ?> </h1>
    </div>
    <div class="target-donation">
      <p> Total Target Dana</p> <br> <h1> Rp. <?php echo number_format($target_donasi); ?></h1> 
    </div>
    <hr color="green">
    <div class="progress-bar">
      <div class="progress" style="width: <?php echo $bar_width; ?>px;"></div>
      <div class="percentage">
        <strong><?php echo number_format($persentase, 2); ?>%</strong><p>Terpenuhi</p>
      </div>
    </div>
    <div class="scrolling-text">
      <p><?php echo $scrolling_text; ?></p>
            
      <div class="blue-bar"></div>
    </div>
  </div>
</section> -->
  
<section class="margin-top-15">
	<div class="slider-wrapper">
		<div class="slider">
			<img id="slide-1" src="img/masjidwik1.jpg" />
			<img id="slide-2" src="img/masjidwik2.jpg" />
			<img id="slide-3" src="img/masjidwik3.jpg" />
		</div>
		<div class="slider-nav">
			<a href="#slide-1"></a>
			<a href="#slide-2"></a>
			<a href="#slide-3"></a>
		</div>
	</div>
</section>

<section class="margin-top-15">
  <div class="container gap-77 flex-column">
    <h1 class="black-text margin-0"><span class="tx-blue">Manfaat </span>Wakaf, Infaq <br>Shodaqoh. </h1>
    <p class="text-utama margin-0">Berikut Adalah Beberapa Keutamaan Wakaf, Infaq <br>Shodaqoh Yang Akan Anda Dapatkan.</p>
  </div>
</section>

<!-- <section class="manfaatcard">
  <div class="card-manfaat">
    <div class="card-details">
      <img src="img/heart.png" class="bordercard"> 
      <img src="img/bigheart.png" class="picbaccard">
      <b class="text-title">Menjadikan hati <br> lebih tenang</b>
      <p class="text-body">Kami memberikan harga <br> yang terbaik dibandingkan <br> dengan Kompetitor kami. </p>
    </div>
  </div>
  <div class="card-1">
    <div class="card-details">
      <img src="img/verifikasi.png" class="bordercard"> 
      <img src="img/bigver.png" class="picbaccard">
      <b class="text-title">Terbukanya <br> Pintu Rezeki</b>
      <p class="text-body">Allah SWT akan membuka <br> pintu rezeki dari arah yang <br> tidak dikira sebelumnya. </p>
    </div>
  </div>
  <div class="card-2">
    <div class="card-details">
      <img src="img/security.png" class="bordercard"> 
      <img src="img/bigsec.png" class="picbaccard">
      <b class="text-title">Menjauhkan Dari  <br> Bahaya</b>
      <p class="text-body">Rasulullah SAW pernah <br> bersabda: "Bersegeralah <br> untuk bersedekah, karena <br> musibah dan bencana tidak <br> bisa mendahului sedekah." </p>
    </div>
  </div>
  <div class="card-3">
    <div class="card-details">
      <img src="img/Star.png" class="bordercard"> 
      <img src="img/bigstar.png" class="picbaccard">
      <b class="text-title">Pahala Yang Tak <br> Terputus</b>
      <p class="text-body">Ini akan menolong kita di  <br> akhirat nantinya, juga <br> dapat menyelamatkannya <br> dari api neraka.</p>
    </div>
    <img src="img/handmasjid.png" class="handpicmas" alt="">
  </div>
</section> -->

<!-- <section class="carawakaf" id="carawakof">
  <div class="container">
    <h1 class="carah1"><span>Cara Melakukan  </span>Wakaf, Infaq <br>Shodaqoh. </h1>
    <p class="carateks">Berikut Adalah Cara Melakukan Wakaf, Infaq Shodaqoh Untuk <br> Membantu Pembangunan Masjid Besar SMK Wikrama Bogor.</p>
  </div>
</section> -->
 
<!-- <section class="caracard">
  <div class="caracard1">
    <div class="cara-details">
      <p class="titleecard"><b> <span>01</span> </b> </p> 
      <b class="cara-title">Isi Form Data Diri</b>
      <p class="cara-body">Isikan form pengisian yang disediakan di form data diri, isikan dengan data diri anda dengan <br> teliti. </p>
    </div>
  </div>
  <div class="caracard2">
    <div class="cara-details">
      <p class="titleecard"><b> <span>02</span> </b> </p> 
      <b class="cara-title">Isikan Nominal Shodaqoh</b>
      <p class="cara-body">Isikan nominal yang akan anda Shodaqohkan, <br> pastikan isi nominalnya dengan seiklasnya tanpa ada <br> paksaan apapun. </p>
    </div>
  </div>
  <div class="caracard3">
    <div class="cara-details">
      <p class="titleecard"><b> <span>03</span> </b> </p> 
      <b class="cara-title">Upload Bukti Pembayaran</b>
      <p class="cara-body">Pilih metode pembayaran dan upload bukti <br> pembayarannya. </p>
    </div>
  </div>
  <div class="caracard4">
    <div class="cara-details">
      <p class="titleecard"><b> <span>04</span> </b> </p> 
      <b class="cara-title">Verifikasi Pembayaran</b>
      <p class="cara-body">Pembayaran anda akan di verifikasi oleh admin  <br> dan jika terverifikasi nama anda akan tampil. </p>
    </div>
  </div>
</section> -->

<!-- <section class="datawakaf" id="datawakaf">
  <div class="container">
    <h1 class="datah1"><span>Data Donatur </span>Wakaf, Infaq <br>Shodaqoh. </h1>
    <p class="datateks">Berikut Adalah Data Donatur Wakaf, Infaq Sodaqoh Untuk <br> Masjid Besar SMK Wikrama Bogor.</p>
  </div>
</section> -->
  
<!-- <section class="datatabel">
  <?php
  include("connect.php");
  ?>

  <div class="datatabel">
    <div class="row">
      <div class="col-sm-8">
        <?php echo $deleteMsg??''; ?>
        <div class="table-responsive">
          <table class="table-table-bordered">
            <thead>
              <tr>
                <th>Nomor</th>
                <th>Nama Donatur</th>
                <th>ID Donatur</th>
                <th>Paket</th>
                <th>Kategori</th>
                <th>Nominal</th>
              </tr>
            </thead>
            <tbody>
            <?php
              if(is_array($fetchData)){      
              $sn=1;
              foreach($fetchData as $data){
            ?>
              <tr>
                <td><?php echo $sn; ?></td>
                <td><?php echo $data['Nama']??''; ?></td>
                <td><?php echo $data['ID']??''; ?></td>
                <td><?php echo $data['Paket']??''; ?></td>
                <td><?php echo $data['Kategori']??''; ?></td>
                <td><?php echo $data['Nominal']??''; ?></td>  
              </tr>
            <?php
              $sn++;}}else{ ?>
              <tr>
                <td colspan="8">
                  <?php echo $fetchData; ?>
                </td>
              </tr>
            <?php
            }?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section> -->
  
<!-- <section class="gallwakaf" id="gallery">
  <div class="container">
    <h1 class="galh1"><span>Gallery </span>Masjid Besar SMK <br>Wikrama Bogor. </h1>
    <p class="galteks">Berikut Adalah Gallery Masjid Besar SMK Wikrama Bogor.</p>
  </div>
</section>  -->

<!-- <section class="gallwak">
  <img class="gallmas" src="img/masjidwik4.jpg" alt="">
  <img class="gallmas1" src="img/masjidwik5.jpg" alt="">
  <img class="gallmas2" src="img/masjidwik6.jpg" alt="">
  <img class="gallmas4" src="img/masjidwik7.jpg" alt="">
  <img class="gallmas5" src="img/masjidwik8.jpg" alt="">
  
  <div class="gallcard">
    <div class="gallcara-details">
      <a href="#"><img class="gallimg" src="img/next.png" alt=""></a>  
      <b class="gallcara-title">Buka Galeri</b>
    </div>
  </div>
</section> -->

<!-- <section class="footer">
  <footer>
    <div class="footer-left">
      <div class="footer-title-body">
        <img src="img/logowikrama.png">
          <h3 class="title">Smk Wikrama <br>Bogor</h3>
      </div>
      <div class="address">
        <h4>Alamat</h4>
        <p>Jl. Raya Wangun <br>
          Kelurahan Sindangsari<br>
          Bogor Timur 16720
        </p>
      </div>
      <br>
      <div class="call">
        <h4>Telepon</h4>
        <p> 0251-8242411 / <br>
          082221718035 (Whatsapp)
        </p>
      </div>
      <br>
      <div class="footer-social-icons">
        <a href="#"><i class='bx bxl-facebook-square'></i></a>
        <a href="#"><i class='bx bxl-twitter'></i></a>
        <a href="#"><i class='bx bxl-instagram'></i></a>
        <a href="#"><i class='bx bxl-youtube'></i></a>
      </div>
    </div>
    <div class="footer-right">
      <h4>Tentang Wikrama</h4>
      <ul>
        <li><a href="#">Sejarah</a></li>
        <li><a href="#">Peraturan Sekolah</a></li>
        <li><a href="#">Rencana Strategi &amp; Prestasi</a></li>
        <li><a href="#">Yayasan</a></li>
        <li><a href="#">Struktur Organisasi</a></li>
        <li><a href="#">Cabang</a></li>
        <li><a href="#">Penghargaan</a></li>
        <li><a href="#">Kerjasama</a></li>
      </ul>
    </div>
    <?php
      if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $pesan = $_POST['pesan'];

        $sql = "INSERT INTO kontak (nama, email, pesan) VALUES ('$nama', '$email', '$pesan')";
        if (mysqli_query($conn, $sql)) {
        }
      }
    ?>
    <div class="footer-right-box">
      <h4>Kirim Pesan</h4>
      <div class="content-footer">
        <form action="" method="post">
          <div class="name">
            <input type="text" name="nama" required placeholder="Nama">
          </div>
          <div class="email">
            <input type="email" name="email" required placeholder="Email">
          </div>
          <div class="msg">
            <textarea name="pesan" cols="30" rows="5" placeholder="Pesan Anda"></textarea>
          </div>
          <div class="btn-shodaqoh">
            <button type="submit" name="submit">Kirim Pesan</button>
          </div>
        </form>
      </div>
    </div>
  </footer>
</section> -->
<!-- <p class="footer-copy">© 2023 - SMK Wikrama Bogor. All Rights Reserved.</p> -->
<script>
    
  function openPopup() {
    document.getElementById("popup").style.display = "block";
    document.getElementById("overlay").style.display = "block";
  }

  function closePopup() {
    document.getElementById("popup").style.display = "none";
    document.getElementById("overlay").style.display = "none";
  }
</script> <script src="apl.js"></script>
</body>
</html>