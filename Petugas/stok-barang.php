<div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Daftar Barang</h4>
                    <p class="card-description">
                    <!-- Add class <code>.table</code> -->
                        <a href="?page=tambah-barang" title="Tambah Produk" 
                            class="btn btn-primary btn-icon-split btn-sm">
                                <span class="icon text-white-50"><i class="fas fa-plus"></i></span>
                                <span class="text">Tambah Produk</span>
                        </a>
                        <form action="" method="post">
                            <input type="text" name="search" placeholder="cari barang.." class="form-control">
                        </form>
                    </p>

                        <div class="table-responsive">
                        <table class="table" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Foto</th>
                                    <th>Nama Produk</th>
                                    <th>Harga</th>
                                    <th>Stok</th>
                                    <th>Terjual</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            if (isset($_POST['search'])) {
                                $nama = $_POST['search'];
                                $no = 1;
                                $sql = $con->query("SELECT * FROM produk WHERE NamaProduk LIKE '%$nama%'");
                                while ($data= $sql->fetch_assoc()) {

                            ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo "<img src='../foto/".$data['Foto']."' width='70' height='70'>"; ?></td>
                                <td><?php echo $data['NamaProduk']?>
                                <td><?php echo $data['Harga']?></td>
                                <td><?php echo $data['Stok']?></td>
                                <td><?php echo $data['Terjual']?></td>
                                <td>
                                    <a href="?page=edit-produk&ProdukID=<?= $data['ProdukID'] ?>" class="btn btn-primary btn-sm">Edit</a>  <a href="?page=hapus-produk&ProdukID=<?= $data['ProdukID'] ?>" class="btn btn-danger btn-sm">Hapus</a>
                                </td>
                            </tr>
                            <?php } 
                            } else {
                                $no = 1;
                                $sql = $con->query("SELECT * FROM produk");
                                while ($data= $sql->fetch_assoc()) {

                            ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo "<img src='../foto/".$data['Foto']."' width='70' height='70'>"; ?></td>
                                <td><?php echo $data['NamaProduk']?>
                                <td><?php echo $data['Harga']?></td>
                                <td><?php echo $data['Stok']?></td>
                                <td><?php echo $data['Terjual']?></td>
                                <td>
                                    <a href="?page=edit-produk&ProdukID=<?= $data['ProdukID'] ?>" class="btn btn-primary btn-sm">Edit</a>  <a href="?page=hapus-produk&ProdukID=<?= $data['ProdukID'] ?>" class="btn btn-danger btn-sm">Hapus</a>
                                </td>
                            </tr>
                            <?php }
                            }
                             
                                 ?>
                        
                        </tbody>
                     </table>
                    </div>
                </div>
            </div>
         </div>
     </div>