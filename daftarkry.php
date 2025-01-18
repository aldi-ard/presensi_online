<?php
include "service/koneksi.php"
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
    <div class="grid grid-dashboard">
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
            <a href="dashboard-a.php" class="text-sm">
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
                dashboard
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
                karyawan
              </div>
            </a>
            <a href="laporankry.php" class="text-sm">
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
                    d="M12 6.03v13m0-13c-2.819-.831-4.715-1.076-8.029-1.023A.99.99 0 0 0 3 6v11c0 .563.466 1.014 1.03 1.007 3.122-.043 5.018.212 7.97 1.023m0-13c2.819-.831 4.715-1.076 8.029-1.023A.99.99 0 0 1 21 6v11c0 .563-.466 1.014-1.03 1.007-3.122-.043-5.018.212-7.97 1.023"
                  />
                </svg>
                laporan
              </div>
            </a>
            <a href="" class="text-sm">
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
                    d="M7 9h5m3 0h2M7 12h2m3 0h5M5 5h14a1 1 0 0 1 1 1v9a1 1 0 0 1-1 1h-6.616a1 1 0 0 0-.67.257l-2.88 2.592A.5.5 0 0 1 8 18.477V17a1 1 0 0 0-1-1H5a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1Z"
                  />
                </svg>
                inbox
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
          <h2>daftar karyawan</h2>
        </div>
        <div class="flex-center gap-sm">
          <img
            class="round"
            src="assets/image.png"
            alt=""
            width="30px"
            height="30px"
          />
          <p>hallo admin</p>
        </div>
      </div>
      <div
        class="content-db-ky bg-white bx-shadow-dark mt-small-i padding-lr-3 relative border-r-5"
      >
        <div class="table1-ky flex-center-align flex-col gap-sm bx-shadow-dark border-r-5">
          <div
            class="gap-1 pd-top-2 flex-center border-btm pd-bottom-2 border-r-2"
          >
            <input type="text" class="input-search" />
            <select name="divisi" class="input-search-sm" id="divisi">
              <option value="divisi">All</option>
              <option value="divisi">marketing</option>
              <option value="divisi">software enginer</option>
              <option value="divisi">frontend developer</option>
              <option value="divisi">backend developer</option>
              <option value="divisi">ui/ux developer</option>
            </select>
            <button class="btn-search bg-primary white">cari</button>
          </div>
          <div class="con-table-ds full-i">
            <table
            class="full-i table"
            border="0"
            border
            collapse="collapse"
            cellpadding="100"
            cellspacing="1">
            <thead>
              <td class="table-center">no</td>
              <td>nama</td>
              <td>divisi</td>
              <td>alamat</td>
              <td>jenis kelamin</td>
              <td>email</td>
              <td>aksi</td>
            </thead>
            <?php $i=1; foreach ($data as $karyawan):?>
                <?php if ($i % 2 ==1 ): ?>
                  <tr>
                <?php else :?>
                  <tr class="bg-dark">
                  <?php endif ?>
              <td class="table-center"><?=$i?></td>
              <td><?=$karyawan['username']?></td>
              <td><?=$karyawan['divisi']?></td>
              <td><?=$karyawan['alamat']?></td>
              <td><?=$karyawan['jenis_kelamin']?></td>
              <td><?=$karyawan['email']?></td>
              <td>
                <div class="flex-row gap-sm">
                <a href="">
                  <div>hapus</div>
                </a>
                <a href="">
                  <div>edit</div>
                </a>
                </div>
              </td>
              <?php $i++; endforeach?>
            </tr>
          </table>
          </div>
        </div>
        <div class="table2-ky gap-sm flex-col bx-shadow-dark border-r-5 pd-top-1 padding-lr-2">
          <div class="flex-row padding-lr-12 flex-center gap-1 bx-shadow-dark border-r-2">
            <h3>35 </h3>
            <h4>karyawan</h4>
          </div>
          <div class="gap-sm flex-col padding-lr-1">
            <div class="flex-row betwen">
              <p>marketing</p>
              <p>5</p>
            </div>
            <div class="flex-row betwen">
              <p>fe developer</p>
              <p>5</p>
            </div>
            <div class="flex-row betwen">
              <p>be developer</p>
              <p>5</p>
            </div>
            <div class="flex-row betwen">
              <p>ui/ux design</p>
              <p>5</p>
            </div>
          </div>
        </div>
        <div class="table3-ky bx-shadow-dark border-r-5 flex-center ">
          <a class="flex-center gap-sm full-cont tx-decor-none primary" target="framename" href="tambahkry.html">
        <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#00aeff"><path d="M440-440H200v-80h240v-240h80v240h240v80H520v240h-80v-240Z"/></svg>  
        <h3>tambah karyawan</h3>
        </a>
      </div>
      </div>
    </div>
  </body>
</html>
