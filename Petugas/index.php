<?php
session_start();
include "../koneksi/koneksi.php";

$user = $_SESSION['Username'];
if ($_SESSION['Username']=="") {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../bootstrap-5.3.2-dist/bootstrap.min.css">
    <script src="../bootstrap-5.3.2-dist/jquery.min.js"></script>
    <script src="../bootstrap-5.3.2-dist/bootstrap.min.js"></script>
    <style>
        /* set height of the grid so .sidenav can be 100% (adjust as needed) */
        .row.content {height:640px} 

         /* set gray background color and 100% height */
        .sidenav {
            background-color; #f1f1f1;
            height: 100%;
        }

        /* on small screens,set height to 'auto' for the grid */
        @media screen and (max-width: 767px) {
        .row.content {height:auto;}
        }
    </style>
</head>
<body>

<div class="container-fluid">
 <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
    <h2><?php echo $_SESSION['Level'] ?></h2>
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="index.php">Dashboard</a></li>
        <li><a href="?page=stok">Stok</a></li>

        <li><a href="?page=user">User</a></li>

        <li><a href="logout.php">Log out</a></li>
    </ul><br>
    </div>
    <br>

    <div class="col-sm-9">
    <?php
            if (isset($_GET['page'])) {
                $laman = $_GET['page'];

                switch ($laman) {
                    case 'user':
                        include "user.php";
                        break;

                    case 'stok':
                        include "stok-barang.php";
                        break;

                    case 'logout':
                        include "logout.php";
                        break;

                    case 'tambah-user':
                        include "tambah-user.php";
                        break;

                    case 'hapus-user':
                        include "hapus-user.php";
                        break;

                    case 'edit-user':
                        include "edit-user.php";
                        break;

                    case 'tambah-barang':
                        include "tambah-barang.php";
                        break;

                    case 'edit-produk':
                        include "edit-produk.php";
                        break;

                    case 'hapus-produk':
                        include "hapus-produk.php";
                        break;


                     default:
                        break;
                        #code...
                }
            }
             else {
                include "dashboard.php";
            }
          ?>
    </div>
 </div>
</div>

</body>
</html>