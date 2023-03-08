<?php
include 'getConnection.php';

$name = $_POST['fnama'];
$emaile = $_POST['femail'];
$telepone = $_POST['fnoHp'];
$subjecte = $_POST['fsubject'];
$commente = $_POST['fcomment'];

$namaFile = $_FILES['fupload']['name'];
$namaSementara = $_FILES['fupload']['tmp_name'];

$folder = "../uploadFile/$namaFile";

$input = "INSERT INTO layanan(nama, email, no_hp, subjectQ, comment, namaFile) VALUES('$name','$emaile', '$telepone', '$subjecte', '$commente', '$namaFile');";


if ($name && $emaile && $telepone && $subjecte && $commente ) {
    move_uploaded_file($namaSementara, "$folder");
    $hasil = mysqli_query($conn,$input);

    if($hasil) {
        header("location: ../index.php");
    }else {
        echo "<h1>Pesan Tidak dapat Terkirim, Silagkan Ulangi Kembali</h1>";
}} else {
    header("location: ../about.php");
}

mysqli_close($conn);

?>