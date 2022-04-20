<?php

function connect(){
   $host = 'localhost';
   $username = 'root';
   $password = '123';
   $dbname = 'fb';
   $con = '';

   try{
      $con = new PDO("mysql:host=$host;dbname=$dbname",$username, $password);
   }catch(PDOException $e){
      echo $e;
   }
   return $con;
}

?>