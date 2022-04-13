<!DOCTYPE html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>

<body>
    <section class="h-100 w-150" style="box-sizing: border-box; background-color:#1F1D2B">
        <style>
            @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

            .navbar-1-4.navbar-dark .navbar-nav .nav-link {
                color: #fff;
            }

            .navbar-1-4 .bg-black {
                background-color: #1f1d2b;
            }

            .navbar-1-4 .btn-get-started {
                border-radius: 20px;
                padding: 12px 30px;
                font-weight: 500;
            }

            .navbar-1-4 .btn-get-started-purple {
                background-color: #525298;
                transition: 0.3s;
            }

            .navbar-1-4 .btn-get-started-purple:hover {
                background-color: #5353a8;
                transition: 0.3s;
            }
        </style>
        <nav class="navbar-1-4 navbar navbar-expand-lg navbar-dark p-4 px-md-4 mb-3 bg-black">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.5 15.75C3.5 8.9845 8.98451 3.49999 15.75 3.49999H29.75C30.7165 3.49999 31.5 4.28349 31.5 5.24999C31.5 6.21649 30.7165 6.99999 29.75 6.99999H15.75C10.9175 6.99999 7 10.9175 7 15.75V29.75C7 30.7165 6.2165 31.5 5.25 31.5C4.2835 31.5 3.5 30.7165 3.5 29.75V15.75Z" fill="#22B07D" />
                        <path d="M10.5 17.5C10.5 13.634 13.634 10.5 17.5 10.5H31.5C35.366 10.5 38.5 13.634 38.5 17.5V31.5C38.5 35.366 35.366 38.5 31.5 38.5H17.5C13.634 38.5 10.5 35.366 10.5 31.5V17.5Z" fill="#22B07D" />
                    </svg>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link px-md-4 active" aria-current="page" href="index.php">Utama</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-md-4" href="daftar_po.php">Data PO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-md-4" href="#">Data Penumpang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-md-4" href="#">Data BUS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-md-4" href="#">Data Pemesanan</a>
                        </li>
                    </ul>
                    <!-- <div class="d-flex">
                        <a class="btn btn-get-started btn-get-started-purple text-white" href="#">Get Started</a>
                    </div> -->
                </div>
            </div>
        </nav>
    </section>
    <div class="container">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul Buku</th>
                    <th>Penerbit Buku</th>
                    <th>Genre</th>
                    <th>Harga Buku</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>System Architect</td>
                    <td>Najwa</td>
                    <td>Belajar</td>
                    <td>10000</td>
                    <td>
                        <a href="" class="btn btn-sm btn-success" style="margin-right: 10px;">Edit</a>
                        <a href="" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>System Architect</td>
                    <td>Najwa</td>
                    <td>Belajar</td>
                    <td>10000</td>
                    <td>
                        <a href="" class="btn btn-sm btn-success" style="margin-right: 10px;">Edit</a>
                        <a href="" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>System Architect</td>
                    <td>Najwa</td>
                    <td>Belajar</td>
                    <td>10000</td>
                    <td>
                        <a href="" class="btn btn-sm btn-success" style="margin-right: 10px;">Edit</a>
                        <a href="" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>System Architect</td>
                    <td>Najwa</td>
                    <td>Belajar</td>
                    <td>10000</td>
                    <td>
                        <a href="" class="btn btn-sm btn-success" style="margin-right: 10px;">Edit</a>
                        <a href="" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>System Architect</td>
                    <td>Najwa</td>
                    <td>Belajar</td>
                    <td>10000</td>
                    <td>
                        <a href="" class="btn btn-sm btn-success" style="margin-right: 10px;">Edit</a>
                        <a href="" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>

</body>

</html>