<?php require('db.config.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data pesanan</title>
    <link rel="stylesheet" href="/css/bootstrap-theme.css">
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
    <table class="table table-bordered table-striped">
        <tbody>
            <?php
            $sql = "SELECT * FROM transaksi";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo $row["id"] ?></td>
                    <td><?php echo $row["nama_penumpang"] ?></td>
                    <td><?php echo $row["nomer_identitas"] ?></td>
                    <td><?php echo $row["nohp"] ?></td>
                    <td><?php echo $row["po_bus"] ?></td>
                    <td><?php echo $row["penumpang_dewasa"] ?></td>
                    <td><?php echo $row["penumumpang_ank"] ?></td>
                    <td><?php echo $row["harga"] ?></td>
                    <td><?php echo $row["total"] ?></td>

                </tr>
            <?php
            }
            $conn = null;
            ?>
        </tbody>
    </table>
</body>

</html>