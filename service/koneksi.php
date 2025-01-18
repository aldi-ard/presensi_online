<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "presensi_karyawan";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$data = mysqli_query($conn, "SELECT * FROM karyawan");


function jumlahKaryawan(){
    global $conn;
    $table = mysqli_query($conn,"SELECT COUNT(*)AS total FROM karyawan");
    $total = mysqli_fetch_assoc($table) ;

    return $total['total'];
}

function login($username, $password){
    global $conn;
     // cek username & password
     $result = mysqli_query($conn, "SELECT * FROM karyawan WHERE username = '$username' AND password = '$password' ");
     $valid=mysqli_fetch_assoc($result);
     // apakah admin
     if(mysqli_num_rows($result)> 0 && $valid['level_login'] == 'admin'){
        session_start();
        $_SESSION['username']= $username;
        $_SESSION['password']= $password;
        header('location:dashboard-a.php');
     }
     if(mysqli_num_rows($result)> 0 && $valid['level_login'] == 'user'){
        session_start();
        $_SESSION['username']= $username;
        $_SESSION['password']= $password;
        header('location:dashboard-u.php');
     }
     return false;
   }
?>