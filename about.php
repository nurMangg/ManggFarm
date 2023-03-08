<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MangFarm | About </title>
    <!-- Font Awesome icons (free version)-->
    <link href="images/logo.svg" rel="shortcut icon">
    <script
      src="https://use.fontawesome.com/releases/v6.1.0/js/all.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="./style/main.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="./vendor/css/bootstrap.min.css" />
  </head>
  <body>
    <!-- Navigation-->
    <nav
      class="navbar navbar-expand-lg navbar-dark navbar-fixed-top" style="background-color: #61876e;"
      id="mainNav"
    >
      <div class="container">
        <a class="navbar-brand" href="#page-top"
          ><img src="images/logo.svg" alt="..." width="200" data-aos="zoom-in"
        /></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarResponsive"
          aria-controls="navbarResponsive"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          Menu
          <i class="fas fa-bars ms-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="product.php">Product</a></li>
            <li class="nav-item"><a class="nav-link active" href="#">About</a></li>
            <li class="nav-item"><a class="nav-link" href="register.php">Profile</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page content -->
<div class="container" style="padding-top: 10rem; padding-bottom: 20rem;">
  <form action="./database/form-layanan.php" method="POST" enctype="multipart/form-data" onsubmit="validasi()" data-aos="fade-up">
    <div class="form-row">
      <div class="form-group col-md-6 pb-4">
        <label for="inputNama">Nama</label>
        <input
          type="text"
          class="form-control"
          id="inputNama"
          placeholder="Nama"
          name="fnama"
        />
      </div>
      <div class="form-group col-md-6 pb-4">
        <label for="inputEmail">Email</label>
        <input
          type="email"
          class="form-control"
          id="inputEmail"
          placeholder="Email"
          name="femail"
        />
      </div>
    </div>
    <div class="form-group pb-4">
      <label for="inputNohp">NO HP</label>
      <input
        type="text"
        class="form-control"
        id="inputNohp"
        placeholder="+62"
        name="fnoHp"
      />
    </div>
    <div class="form-group pb-4">
      <label for="inputSubject">Subject</label>
      <input
        type="text"
        class="form-control"
        id="inputSubject"
        placeholder="Konsultasi / Pembelian"
        name="fsubject"
      />
    </div>
    <div class="form-group pb-4">
      <label for="inputfile">Upload File <span style="color : grey; font-style: italic;">(opsional)</span></label>
      <input
        type="file"
        class="form-control"
        name="fupload"
      />
    </div>
    <div class="form-row">

<div class="form-group pb-4">
  <label for="comment">Comment :</label>
  <textarea class="form-control" rows="5" id="inputComment" name="fcomment"></textarea>
</div>
    </div>
    <button type="submit" value="upload" class="btn" style="background-color: #61876e; color:white;">Kirim</button>
</div>



    <footer class="text-center text-white" style="background-color: #61876e">
      <div class="container pt-2">
        <h5 style="font-size: 15px">
          Nur Rohman (21090118) DIV TEKNIK INFORMATIKA
        </h5>
      </div>
      <div
        class="text-center text-white p-2"
        style="background-color: rgba(0, 0, 0, 0.2)"
      >
        © 2023 Copyright:
        <a
          class="btn btn-link btn-floating btn-lg text-white m-1"
          href="https://www.linkedin.com/in/nur-rohman-311757249/"
          role="button"
          data-mdb-ripple-color="dark"
          ><i class="fab fa-linkedin"></i
        ></a>
        <a
          class="btn btn-link btn-floating btn-lg text-light m-1"
          href="https://github.com/nurMangg/"
          role="button"
          data-mdb-ripple-color="dark"
          ><i class="fab fa-github"></i
        ></a>
      </div>
    </footer>





    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="./vendor/jquery/jquery.slim.min.js"></script>
    <script src="./scripts/main.js"></script>
    <script src="./vendor/js/bootstrap.bundle.min.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
