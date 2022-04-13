<?php
require_once('db.config.php');

if (isset($_POST['daftar'])) {
    $nama_penumpang = $_POST['nama_penumpang'];
    $nomer_identitas = $_POST['nomer_identitas'];
    $nohp = $_POST['nohp'];
    $po_bus = $_POST['po_bus'];
    $tujuan = $_POST['tujuan'];
    $penumpang_dewasa = $_POST['penumpang_dewasa'];
    $penumumpang_ank = $_POST['penumumpang_ank'];
    $harga = $_POST['harga'];
    $total = $_POST['total'];

    $sql = "INSERT INTO transaksi(nama_penumpang, nomer_identitas, nohp, po_bus, tujuan, penumpang_dewasa, penumumpang_ank,harga, total) VALUES('$nama_penumpang', '$nomer_identitas', '$nohp', '$po_bus', '$tujuan', '$penumpang_dewasa', '$penumumpang_ank','$harga', '$total')";
    // Insert user data into table

    // for check query

    if ($conn->prepare($sql)) {

        $result = $conn->query($sql);

        if ($result === TRUE) {
            // Show message when user added
            echo "Participant added successfully. <a href='daftar.php'>View Participant</a>";
        } else {
            // Show message when user not added
            echo "Participant added <b>not</b> successfully. <a href='pendaftaran.html'>Try Again</a>";
        }
    } else {
        echo "error:[" . $conn->errno . "] <br>";
        echo "<b>" . $conn->error . "</b>";
    }
}
