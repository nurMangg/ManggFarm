<?php
// memulai session
session_start();
error_reporting(0);
if (isset($_SESSION['user_web']))
{
	// jika level admin
	if ($_SESSION['user_web'] == "Admin")
   {   
   }
   // jika kondisi level user maka akan diarahkan ke halaman lain
   else if ($_SESSION['user_web'] == "pengguna")
   {
       header('location: ../index.php');
   }
}
if (!isset($_SESSION['user_web']))
{
	header('location: ../index.php');
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
              <a class="text-white" href="#">
                <i class="bi bi-house mr-2 active"></i>
                Dashboard
              </a>
            </li>
            <li>
              <a class="nav-link" href="./admin-datalayanan.php">
                <i class="bi bi-archive mr-2"></i>
                DATA LAYANAN
              </a>
            </li>
            <li>
              <a class="nav-link" href="#">
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
            <div class="card-body">
              <h4>Nur Rohman</h4>
              <p>
                Mahasiswa Semester 3 Kelas D NIM 21090118 DIV Teknik Informatika, Politeknik Harapan Bersama.
              </p>
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
