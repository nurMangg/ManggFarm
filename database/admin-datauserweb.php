<?php

include "getConnection.php";

if (!$conn) {
    die("Tidak tersambung dengan database!");
}

$namaDepan = "";
$namaBelakang = "";
$email = "";
$password = "";
$level = "";


$sukses = "";
$error = "";

if (isset($_GET['op'])) {
    $op = $_GET['op'];
} else {
    $op = "";
}
if($op == 'delete'){
    $id         = $_GET['id'];
    $sql1       = "delete from pengguna where id = '$id'";
    $q1         = mysqli_query($conn,$sql1);
    if($q1){
        $sukses = "Berhasil hapus data";
    }else{
        $error  = "Gagal melakukan delete data";
    }
}
if ($op == 'edit') {
    $id         = $_GET['id'];
    $sql1       = "select * from pengguna where id = '$id'";
    $q1         = mysqli_query($conn, $sql1);
    $r1         = mysqli_fetch_array($q1);
    $namaDepan = $r1['firstname'];
    $namaBelakang = $r1['lastname'];
    $email      = $r1['email'];
    $password      = $r1['passwd'];
    $level      = $r1['user_web'];

    if ($id == '') {
        $error = "Data tidak ditemukan";
    }
}

if (isset($_POST['simpan'])) { //untuk membuat pengguna baru
    $namaDepan      = $_POST['namaDepan'];
    $namaBelakang   = $_POST['namaBelakang'];
    $email          = $_POST['email'];
    $password       = $_POST['password'];
    $level          = $_POST['level'];

    if ($namaDepan && $namaBelakang && $email && $password && $level) {
        if ($op == 'edit') { //untuk update
            $sql1       = "update pengguna set firstname = '$namaDepan', lastname='$namaBelakang', email = '$email', passwd = MD5('$password'), user_web='$level' where id = '$id'";
            $q1         = mysqli_query($conn, $sql1);
            if ($q1) {
                $sukses = "Data berhasil diupdate";
            } else {
                $error  = "Data gagal diupdate";
            }
        } else { //untuk insert
            $sql1   = "insert into pengguna(firstname, lastname, email, passwd, user_web, dibuat_tanggal) values ('$namaDepan','$namaBelakang','$email','$password','$level',CURRENT_DATE())";
            $q1     = mysqli_query($conn, $sql1);
            if ($q1) {
                $sukses     = "Berhasil memasukkan data baru";
            } else {
                $error      = "Gagal memasukkan data";
            }
        }
    } else {
        $error = "Silakan masukkan semua data";
    }
}

?>
<!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>MangFarm | Admin</title>
        <!-- bootstrap 5 css -->
        <link rel="stylesheet" href="../vendor/css/bootstrap.min.css">

        <link
          rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
        />
        <style>
          li {
            list-style: none;
            margin: 20px 0 20px 0;
          }
    
          a {
            text-decoration: none;
          }
    
          .sidebar {
            width: 250px;
            height: 100vh;
            position: fixed;
            margin-left: -300px;
            transition: 0.4s;
          }
    
          .active-main-content {
            margin-left: 250px;
          }
    
          .active-sidebar {
            margin-left: 0;
          }
    
          #main-content {
            transition: 0.4s;
          }
        </style>
      </head>
    
      <body>
        <div>
          <div class="sidebar p-4" style="background-color: #61876e;" id="sidebar">
            <h4 class="mb-5 text-white">MangFarm</h4>
            <li>
              <a class="nav-link" href="#">
                <i class="bi bi-house mr-2"></i>
                Dashboard
              </a>
            </li>
            <li>
              <a class="nav-link" href="./admin-datalayanan.php">
                <i class="bi bi-archive mr-2 "></i>
                DATA LAYANAN
              </a>
            </li>
            <li>
              <a class="text-white" href="#">
                <i class="bi bi-archive mr-2"></i>
                DATA USER-WEBSITE
              </a>
            </li>
            <li>
              <a class="nav-link" href="#" onclick="logout()">
                <i class="bi bi-box-arrow-in-left mr-2"></i>
                LOGOUT
              </a>
            </li>
          </div>
        </div>
<div class="p-4" id="main-content">
          <button class="btn" style="background-color: #61876e" id="button-toggle">
            <i class="bi bi-list"></i>
          </button>
          <div class="card mt-5">
        <div class="card">
            <div class="card-header">
                Create / Edit Data
            </div>
            <div class="card-body">
                <?php
                if ($error) {
                ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $error ?>
                </div>
                <?php
                    header("refresh:3;url=admin-datauserweb.php");
                }
                ?>
                <?php
                if ($sukses) {
                ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $sukses ?>
                </div>
                <?php
                    header("refresh:3;url=admin-datauserweb.php");
                }
                ?>
                <form action="" method="POST">
                    <div class="mb-3 row">
                        <label for="namaDepan" class="col-sm-2 col-form-label">Nama Depan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="namaDepan" name="namaDepan" value="<?php echo $namaDepan ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="namaBelakang" class="col-sm-2 col-form-label">Belakang</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="namaBelakang" name="namaBelakang" value="<?php echo $namaBelakang ?>">
                        </div>
                    </div>                    
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="email" name="email" value="<?php echo $email ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="password" class="col-sm-2 col-form-label">password</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="password" name="password" value="<?php echo $password ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="programStudi" class="col-sm-2 col-form-label">Level</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="level" id="level">
                                <option value="">- Pilih Level -</option>
                                <option value="Admin" <?php if ($level=="Admin")
                                    echo "selected" ?>>Admin
                                </option>
                                <option value="pengguna" <?php if ($level=="pengguna")
                                    echo "selected" ?>>pengguna
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary" />
                    </div>
                </form>
            </div>
            <div class="card mt-5">
            <div class="card-header text-white bg-secondary">
                Data User Website
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Depan</th>
                            <th scope="col">Nama Belakang</th>
                            <th scope="col">Email</th>
                            <th scope="col">Password</th>
                            <th scope="col">Level</th>
                            <th scope="col">Dibuat Pada</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql2   = "select * from pengguna order by id desc";
                        $query2     = mysqli_query($conn, $sql2);
                        $urut   = 1;
                        while ($r2 = mysqli_fetch_array($query2)) {
                            $id         = $r2['id'];
                            $first        = $r2['firstname'];
                            $last       = $r2['lastname'];
                            $email         = $r2['email'];
                            $password     = $r2['passwd'];
                            $level = $r2['user_web'];
                            $tanggaldibuat = $r2['dibuat_tanggal'];

                        ?>
                            <tr>
                                <th scope="row"><?php echo $urut++ ?></th>
                                <td scope="row"><?php echo $first ?></td>
                                <td scope="row"><?php echo $last ?></td>
                                <td scope="row"><?php echo $email ?></td>
                                <td scope="row"><?php echo $password ?></td>
                                <td scope="row"><?php echo $level ?></td>
                                <td scope="row"><?php echo $tanggaldibuat ?></td>
                                <td scope="row">
                                    <a href="admin-datauserweb.php?op=edit&id=<?php echo $id ?>"><button type="button" class="btn btn-warning">Edit</button></a>
                                    <a href="admin-datauserweb.php?op=delete&id=<?php echo $id?>" onclick="return confirm('Yakin mau delete data?')"><button type="button" class="btn btn-danger">Delete</button></a>            
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                    
                </table>
            </div>
        </div>
          </div>
        </div>
    
        <script>
    
          // event will be executed when the toggle-button is clicked
          document.getElementById("button-toggle").addEventListener("click", () => {
    
            // when the button-toggle is clicked, it will add/remove the active-sidebar class
            document.getElementById("sidebar").classList.toggle("active-sidebar");
    
            // when the button-toggle is clicked, it will add/remove the active-main-content class
            document.getElementById("main-content").classList.toggle("active-main-content");
          });
    
        </script>
        <script>
            function logout() {
                window.location= '../login.php';
            }
        </script>
      </body>
    </html>