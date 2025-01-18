<?php

include "service/koneksi.php";
$notif = "";
if(isset($_POST['login'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
  //masuk function 
  if(!login($username, $password)){
    $notif= "username dan password salah";
  };
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>hal-login</title>
    <link rel="stylesheet" href="style/style.css" />
  </head>
  <body>
    <div class=" main-login ">
      <!-- container utama -->
      <div class="container-login flex-row">
        <!-- form -->
        <form class="container-form wd-50 flex-col"  method="post">
          <div class="container-form-ch flex-col">

            <div class="flex-center">
              <h1 class="flex-center">login</h1>
            </div>
            <div class="form-input flex-row flex-center mt-2">
              <input class="pd-left-1" type="text" placeholder="username" name="username" />
            </div>
            <div class="form-input flex-row flex-center mt-2">
              <input class="pd-left-1" type="password" placeholder="password" name="password" />
            </div>
            <div class="form-input-rmb pd-left-sm flex-row flex-start mt-1 gap-sm">
              <input class="btn" type="checkbox" name="remember" id="rmb" />
              <label for="rmb" class="text-sm-medium black"> ingat saya</label>
            </div>
            <p class="text-sm red padding-lr-1"><?=$notif?></p>
            <div class="form-input flex-center">
                <button type="submit" name="login" class="btn btn-full bg-white text-sm-medium">login</button>
            </div>

          </div>
        </form>
        <div class="wd-50 border-r-5 bg-white img-contain"></div>
      </div>
    </div>
  </body>
</html>
