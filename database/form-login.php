<?php

session_start();

include 'getConnection.php';

$Lemail = $_POST['email-regis'];
$Lpassword = $_POST['password'];

$log = "SELECT * FROM pengguna WHERE email = '$Lemail'";

$hasil = mysqli_query($conn, $log);

if ($hasil > 0) {
        $data = mysqli_fetch_array($hasil);
        $cek = mysqli_num_rows($hasil);
        if (MD5($Lpassword) == $data['passwd']){
                if($cek > 0) {
                        echo "sukses";
                        // menyimpan username dan level ke dalam session
                        $_SESSION['user_web'] = $data['user_web'];
                        $_SESSION['email'] = $data['email'];
                        header('location: admin.php');
                }

        } else {
                echo "<script>alert('Password/Email yang anda masukkan salah!');
                        window.location= '../login.php'   
                </script>";
        }
} else {
        echo "<script>alert('Pengguna tidak ditemukan!');
                window.location= '../login.php'   
        </script>";
}







mysqli_close($conn);

?>