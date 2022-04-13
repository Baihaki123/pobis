<?php

include 'config/koneksi.php';

// if (isset($_GET['halaman'])) $halaman = $_GET['halaman'];
// else $halaman = "index";

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PO Bis Online</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="css/bootstrap-theme.css">
  <link rel="stylesheet" href="css/bootstrap-theme.css.map">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css.map">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrap.css.map">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css.map">
  <link rel="stylesheet" href="css/style.css">

</head>

<body>
  <div class="header">
    <h2>Selamat Datang Website PO Bus Online Tegal Raya</h2>
  </div>

  <div class="topnav">
    <a href="#">Utama</a>
    <a href="daftar_po.php">Data PO</a>
    <a href="data_penumpang.php">Data Penumpang</a>
    <a href="data_bus.php">Data BUS</a>
    <a href="form_pemesanan.php">Data Pemesanan</a>
    <a href="#" style="float:right">
      <form>
        <input class="search" type="text" placeholder="Need Help?" required>
        <input class="button" type="button" value="Temukan">
      </form>
    </a>
  </div>

  <h1 style="color:white;">
    <marquee bgcolor="CadetBlue">Pesan Tiket Online Tidak Perlu Ribet, Tinggal Klik Lebih Asyik</marquee bgcolor="white">
  </h1>

  <div class="row">
    <div class="leftcolumn">
      <div class="card">
        <h2 style="color:rgb(0, 140, 255);">Kepuasan Anda adalah Bahagia Kami!</h2>
        <h4>Bus Tegal Raya</h4>
        <div class="fakeimg">
          <p align="center"><img src="img/img 0.jpg" width="500" height="300">
        </div>
      </div>
    </div>
    <div class="rightcolumn">
      <div class="card">
        <h2 style="color:dodgerblue;">Kritik dan Masukan Untuk Website Kami</h2>
        <div class="fakeimg">
          <form action="/action_page.php">

            <label for="lname"></label><br>
            <input type="text" id="lname" name="lname" value=""><br><br>
            <input type="submit" value="Submit">
          </form>
        </div>
      </div>

      <div class="card">
        <h3 style="color:dodgerblue;">PO Bis Online</h3>
        <p><b>Tegal Raya</b> </p>
        <p>Alamat :</p>
        <p>Terminal Kota Tegal</p>
        <p>Telp :+62877-3971-5260</p>
        <p><em>E-Tiket Prefered Partner:</em> <a href="https://m.traveloka.com/id-id/tiket-bus-travel?id=" target="_blank">Traveloka</a></p>
      </div>
      <div class="card">
        <h3>Follow Us Instagram For More Information</h3>
        <p style="text-align:justify,"></p><img src="img/IG.jpg" style="float:left;" width="30" ,height="30" />
        <em>@pobistegal</em></p>
      </div>
    </div>
  </div>
  <div class="footer">
    <h2 align="center">
      <font face="maiandra gd" color="black">Copyright &copy; 2022. Wilda Vini Alfiyah
    </h2>
    <hr color="black">
  </div>

</body>

</html>