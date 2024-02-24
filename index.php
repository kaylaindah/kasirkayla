<?php
include "koneksi/koneksi.php";
include("header.php");

?>
<body>

<style>
  .main-content {
    margin-top: 60px;
  }
  .card-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
    }

    .card {
    margin-bottom: 20px;
    }
</style>

    <nav class="navbar navbar-expand-lg navbar-primary bg-primary fixed-top">
         <div class="container-fluid">
            <a class="navbar-brand" href="#">Pelanggan</a>
            <div class="navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="transaksi.php">Transaksi</a>
                    </li>
                </ul>
            </div>
           
        </div>
    </nav>

    <div class="main-content">
        <div class="card-container">
            <?php
            if(isset($_GET['cari'])) {
            $search = $_GET['search'];
            $result = mysqli_query($con,"SELECT * FROM produk WHERE NamaProduk LIKE '%$search%'");
            } else {
            $result = mysqli_query($con,"SELECT * FROM produk");
            }
            $no = 1;
            if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                ?>
                <div class='card' style='width: 18rem; margin: 10px;'>
                
                    <?php echo "<img class='card-img-top' src='Foto/" . $row['Foto'] . "' width='230' height='250'>" ?>
                    <div class='card-body'>
                        <h5 class='card-title'><?php echo $row['NamaProduk']?></h5>
                        <p class='card-text'>Harga: RP.<?php echo number_format($row['Harga']) ?></p>
                        <p class='card-text'>Stok: <?php echo $row['Stok']?></p>
                        <a href='transaksi.php' class='btn btn-md btn-primary float-end'>Beli</a>
                    </div>
                
                </div>
                <?php
                $no++;
            }
            } else {
            ?>
            <tr>
                <td colspan="9" align="center"><h3>Tidak ada data <strong>'<?= $cari?>'</strong></h3></td>
            </tr>
            <?php
            }
            ?>
        </div>
    </div>
</body>
