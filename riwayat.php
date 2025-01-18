 <?php
include "service/koneksi.php";
$username = $_GET['username'];

$data_karyawan = mysqli_query($conn, "SELECT * FROM karyawan WHERE username = '$username'");
$users = mysqli_fetch_assoc($data_karyawan);
?> 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css" type="text/css" />
  </head>
  <body class="bg-white">
    <div class="grid grid-dashboard-user">
      <div
        class="sidenavbar bx-shadow-dark flex-col gap-1 mt-small betwen bg-white"
      >
        <div class="flex-col gap-1">
          <div class="logo flex-center pd-top-2 gap-sm">
            <svg
              class="w-6 h-6 text-gray-800 primary"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              width="29"
              height="29"
              fill="none"
              viewBox="0 0 24 24"
            >
              <path
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M21 12a28.076 28.076 0 0 1-1.091 9M7.231 4.37a8.994 8.994 0 0 1 12.88 3.73M2.958 15S3 14.577 3 12a8.949 8.949 0 0 1 1.735-5.307m12.84 3.088A5.98 5.98 0 0 1 18 12a30 30 0 0 1-.464 6.232M6 12a6 6 0 0 1 9.352-4.974M4 21a5.964 5.964 0 0 1 1.01-3.328 5.15 5.15 0 0 0 .786-1.926m8.66 2.486a13.96 13.96 0 0 1-.962 2.683M7.5 19.336C9 17.092 9 14.845 9 12a3 3 0 1 1 6 0c0 .749 0 1.521-.031 2.311M12 12c0 3 0 6-2 9"
              />
            </svg>
            <h2 class="font-teko">PRESENSI ONLINE</h2>
          </div>
          <div class="navbar flex-col pd-center-1 gap-2 pd-top-2">
            <a href="dashboard-u.php" class="text-sm ">
              <div class="flex-center start">
                <svg
                  class="w-6 h-6 text-gray-800 dark:text-white"
                  aria-hidden="true"
                  xmlns="http://www.w3.org/2000/svg"
                  width="20"
                  height="20"
                  fill="none"
                  viewBox="0 0 24 24"
                >
                  <path
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="m4 12 8-8 8 8M6 10.5V19a1 1 0 0 0 1 1h3v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h3a1 1 0 0 0 1-1v-8.5"
                  />
                </svg>
                dashboard user
              </div>
            </a>
            <a href="#" class="text-sm active">
              <div class="flex-center start">
                <svg
                  class="w-6 h-6 text-gray-800 dark:text-white"
                  aria-hidden="true"
                  xmlns="http://www.w3.org/2000/svg"
                  width="20"
                  height="20"
                  fill="none"
                  viewBox="0 0 24 24"
                >
                  <path
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M11 9h6m-6 3h6m-6 3h6M6.996 9h.01m-.01 3h.01m-.01 3h.01M4 5h16a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1Z"
                  />
                </svg>
                riwayat absen
              </div>
            </a>
          </div>
        </div>
        <div class="flex-center">
          <button class="btn-logout flex-center">
            <svg
              class="w-4 h-4 text-gray-800 dark:text-white"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              width="20"
              height="20"
              fill="none"
              viewBox="0 0 24 24"
            >
              <path
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M16 12H4m12 0-4 4m4-4-4-4m3-4h2a3 3 0 0 1 3 3v10a3 3 0 0 1-3 3h-2"
              />
            </svg>
            <h4>logout</h4>
          </button>
        </div>
      </div>
      <div
        class="header flex-row flex-center-align betwen padding-lr-2 pd-top-1"
      >
        <div>
          <h2>Dashboard.</h2>
        </div>
        <div class="flex-center gap-sm">
          <img
            class="round"
            src="assets/image.png"
            alt=""
            width="30px"
            height="30px"
          />
          <p>hallo <?=$username?></p>
        </div>
      </div>
      <div class="content-rwy-user bg-white bx-shadow-dark mt-small-i relative border-r-5">
       <div class="data-diri flex-center flex-col bg-transparant gap-2 bx-shadow-dark border-r-5 mt-small">
        <div>
          <img src="assets/image.png" width="80px" height="80px" class="round" alt="">
        </div>
        <table cellpadding='10' cellspacing="15">
            <tr>
              <td>nama</td>
              <td><?=': '.$users['username']?></td>
            </tr>
            <tr>
              <td>jenis kelamin</td>
              <td><?=': '.$users['jenis_kelamin']?></td>
            </tr>
            <tr>
              <td>divisi</td>
              <td><?=': '.$users['divisi']?></td>
            </tr>
            <tr>
              <td>email</td>
              <td><?=': '.$users['email']?></td>
            </tr>
            <tr>
              <td>alamat</td>
              <td><?=': '.$users['alamat']?></td>
            </tr>
          </table>
        <form action="">
          <button class="btn-search bg-primary white ">ubah profil</button>
        </form>
       </div>
       <div class="tanggal bx-shadow-dark pd-top-2 mt-small border-r-5 flex-center-justify">
       <div class="">
        <table border="1" cellpadding="10px" cellspacing="0">
          <thead >
            <td class="flex-center padding-lr-1" width="180px">tgl</td>
            <td class="padding-lr-1" width="180px">ket</td>
          </thead>
          <tr> 
            <td class="flex-center padding-lr-1">
              <div class="flex-center">
                <p>1/22/2025</p>
              </div>
            </td>
            <td class="padding-lr-1">
              <div class="border-r-2 bg-primary flex-center">
                <p class="flex-center">masuk</p>
              </div>
            </td>
          </tr>
          <tr> 
            <td class="flex-center padding-lr-1">
              <div class="flex-center">
                <p>2/22/2025</p>
              </div>
            </td>
            <td class="padding-lr-1">
              <div class="border-r-2 bg-primary flex-center">
                <p class="flex-center">masuk</p>
              </div>
            </td>
          </tr>
          <tr> 
            <td class="flex-center padding-lr-1">
              <div class="flex-center">
                <p>3/22/2025</p>
              </div>
            </td>
            <td class="padding-lr-1">
              <div class="border-r-2 bg-primary flex-center">
                <p class="flex-center">masuk</p>
              </div>
            </td>
          </tr>
        </table>
       </div>
      </div>
      </div>
    </div>
  </body>
</html>
