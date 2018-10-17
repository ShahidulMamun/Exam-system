<?php
  $filepath = realpath(dirname(__FILE__));
      include_once ($filepath.'/classes/User.php');
      include_once ($filepath.'/../helpers/Format.php');

   $Usr = new User();


   if($_SERVER['REQUEST_METHOD'] == 'POST'){


      $email    = $_POST['email'];
      $password = md5($_POST['password']);
      $userlogin = $Usr->userLogin($email, $password);

    }
?>
