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
    <link rel="stylesheet" type="text/css" href="bootsrap/css/bootstrap.css">
    <script type="text/javascript" src="bootsrap/js/jquery.js"></script>
    <script type="text/javascript" src="bootsrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
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
    <form method="POST" action="add.php" style="position: center;">
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">nama penumpang</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail3" name="nama_penumpang">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">nomer identitas</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPassword3" name="nomer_identitas">
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">nohp</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPassword3" name="nohp">
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">po_bus</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPassword3" name="po_bus">
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">tujan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPassword3" name="tujuan">
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">penumpang dewasa</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPassword3" name="penumpang_dewasa">
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">penumpang anak</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPassword3" name="penumumpang_ank">
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">harga</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPassword3" name="harga">
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">total</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPassword3" name="total">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <button type="submit" name="daftar" class="btn btn-primary">Sign in</button>
            </div>
            <div class="col-sm-2"></div>
        </div>
    </form>
</body>

</html>