function validasi() {
  var nama = document.getElementById("inputNama").value;
  var email = document.getElementById("inputEmail").value;
  var noHP = document.getElementById("inputNohp").value;
  var subject = document.getElementById("inputSubject").value;
  var comment = document.getElementById("inputComment").value;
  if (
    nama != "" &&
    email != "" &&
    noHP != "" &&
    subject != "" &&
    comment != ""
  ) {
    alert("Pesan akan dikirimkan");
    return true;
  } else {
    alert("Anda harus mengisi data dengan lengkap !");
    window.location = "../about.php";
    return false;
  }
}
