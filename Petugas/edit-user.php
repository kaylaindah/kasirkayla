<?php
include_once("../koneksi/koneksi.php");

if(isset($_POST['update']))
{ 
    $id = $_GET['UserID'];

     $name=$_POST['name'];
     $password= md5($_POST['password']);

    $result = mysqli_query($con, "UPDATE user SET Username='$name', Password='$password' WHERE UserID=$id");

    header("Location: index.php?page=user");
     echo "<script>alert('berhasil')</script>";
}

$id = $_GET['UserID'];

$result1 = mysqli_query($con, "SELECT * FROM user WHERE UserID=$id");

while($user_data = mysqli_fetch_array($result1))
{
    $name = $user_data['Username'];
    $password = $user_data['Password'];
}
?>
<div class="row well">
        <div class="col-md-4">
            <div class="card well">
                <div class="card-header">
                    <h3 class="">Update User</h3>
                </div>
                <div class="card-body">
                    <form action="" method="POST">

                        <div class="mb-3 mt-3">
                            <label for="nama" class="form-label">Nama:</label>
                            <input type="text" class="form-control" id="nama" value="<?php echo $name; ?>" placeholder="Enter Name" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="pwd" class="form-label">Password:</label>
                            <input type="password" class="form-control" id="pwd" value="<?php echo $password; ?>" placeholder="Enter password" name="password">
                        </div>
                        <button type="submit" name="update" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>