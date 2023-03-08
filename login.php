<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mangFarm | Sign-In</title>

    <script
      src="https://use.fontawesome.com/releases/v6.1.0/js/all.js"
      crossorigin="anonymous"
    ></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="./vendor/css/bootstrap.min.css" />
</head>
<body>
    <!-- Section: Design Block -->
<section class="text-center">
  <!-- Background image -->
  <div class="p-5 bg-image" style="
        background-image: url('./images/background-register.jpg');
        height: 300px;

        "></div>
  <!-- Background image -->

  <div class="card mx-4 mx-md-5 shadow-5-strong" style="
        margin-top: -100px;
        background: hsla(0, 0%, 100%, 0.8);
        backdrop-filter: blur(30px);
        ">
    <div class="card-body py-5 px-md-5">

      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <h2 class="fw-bold">Sign IN now</h2>
          <p class="mb-5">Belum punya akun? <a href="register.php"><Strong>Register</Strong></a></p>
          <form action="./database/form-login.php" method="POST">
            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" id="formemail" name="email-regis" class="form-control" />
              <label class="form-label" for="form3Example3">Email address</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
              <input type="password" id="formpasswd" name="password" class="form-control" />
              <label class="form-label" for="form3Example4">Password</label>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">
              Sign in
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<footer class="text-center text-white" style="background-color: #61876e; margin-top: 15rem; bottom: 0; position: fixed; width: 100%;">
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

    <!-- SCRIPTS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="./vendor/jquery/jquery.slim.min.js"></script>
    <script src="./scripts/main.js"></script>
    <script src="./vendor/js/bootstrap.bundle.min.js"></script>
    <script>
      AOS.init();
    </script>
</body>
</html>