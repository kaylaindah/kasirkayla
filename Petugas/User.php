<div class="row">       
    <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Daftar user</h4>
                    <?php 
                        if ($_SESSION['Level']=='Admin') {
                        ?>
                    <p class="card-description">
                    <!-- Add class <code>.table</code> -->
                        <a href="?page=tambah-user" title="Tambah Produk" 
                                class="btn btn-primary btn-icon-split btn-sm">
                                <span class="icon text-white-50"><i class="fas fa-plus"></i></span>
                                <span class="text">Tambah user</span>
                        </a>
                    </p>

                    <?php
                        }
                        ?>

                    <div class="table-responsive">
                        <table class="table" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama User</th>
                                    <th>password</th>
                                    <th>Level</th>
                                    <?php if ($_SESSION['Level'] == "Admin") { ?>
                                    <th>Pilihan</th>
                                    <?php } ?>
                            </tr>
                            </thead>
                            <tbody>
                            <?php 
                                $no = 1;
                                $sql = $con->query("SELECT * FROM user");
                                while ($data= $sql->fetch_assoc()) {

                            ?>
                             <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $data['Username']; ?></td>
                                    <td><?php echo $data['Password']; ?></td>
                                    <td><?php echo $data['Level']; ?></td>
                                    <?php if ($_SESSION['Level'] == "Admin") { ?>
                                    <td><a type='button' href='?page=edit-user&UserID=<?= $data['UserID']; ?>' class='btn btn-sm btn-warning'>Edit</a>/<a type='button' href='?page=hapus-user&UserID=<?= $data['UserID']; ?>' class='btn btn-sm btn-danger'>Delete</a></td>
                                    <?php } ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>

              </div>
            </div>
        </div>
    </div>