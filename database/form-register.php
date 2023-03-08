<?php
include 'getConnection.php';

$Rfirst = $_POST['first_name'];
$Rlast = $_POST['last_name'];
$Remail = $_POST['email-regis'];
$Rpassword = $_POST['password'];


$input = "INSERT INTO pengguna(firstname, lastname, email, passwd, user_web, dibuat_tanggal) VALUES('$Rfirst','$Rlast','$Remail', '$Rpassword', 'pengguna',CURRENT_DATE());";

$hasil = mysqli_query($conn,$input);

if($hasil) {
    echo ("Akun anda berhasil dibuat");
    header("location: ../index.php");
}else {
    echo "<h1>Akun tidak Berhasil dibuat</h1>";
}

mysqli_close($conn);


?>