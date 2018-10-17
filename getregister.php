<?php
  $filepath = realpath(dirname(__FILE__));
      include_once ($filepath.'/classes/User.php');
      include_once ($filepath.'/../helpers/Format.php');

   $Usr = new User();


   if($_SERVER['REQUEST_METHOD'] == 'POST'){
       
      $name     = $_POST['name'];
      $username = $_POST['username'];
      $email    = $_POST['email'];
      $password = $_POST['password'];
      
      $userregi = $Usr->userRegistration($name,$username,$password,$email);
      
    }
?>