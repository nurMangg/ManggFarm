<?php

include "getConnection.php"


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
              <a class="text-white" href="#">
                <i class="bi bi-archive mr-2 "></i>
                DATA LAYANAN
              </a>
            </li>
            <li>
              <a class="nav-link" href="admin-datauserweb.php">
                <i class="bi bi-archive mr-2"></i>
                DATA USER-WEBSITE
              </a>
            </li>
            <li>
              <a class="nav-link" href="#">
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
            <div class="card-header text-white bg-secondary">
                Data Layanan
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">No HP</th>
                            <th scope="col">Subject</th>
                            <th scope="col">namaFile</th>
                            <th scope="col">Comment</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql2   = "select * from layanan order by id desc";
                        $query2     = mysqli_query($conn, $sql2);
                        $urut   = 1;
                        while ($r2 = mysqli_fetch_array($query2)) {
                            $nama        = $r2['nama'];
                            $email       = $r2['email'];
                            $noHP         = $r2['no_hp'];
                            $subjectq     = $r2['subjectQ'];
                            $namaFile     = $r2['namaFile'];
                            $comments   = $r2['comment'];

                        ?>
                            <tr>
                                <th scope="row"><?php echo $urut++ ?></th>
                                <td scope="row"><?php echo $nama ?></td>
                                <td scope="row"><?php echo $email ?></td>
                                <td scope="row"><?php echo $noHP ?></td>
                                <td scope="row"><?php echo $subjectq ?></td>
                                <td scope="row"><?php echo "<a href='../uploadFile/$namaFile'>$namaFile</a>" ?></td>
                                <td scope="row"><?php echo $comments ?></td>
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