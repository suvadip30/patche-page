<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['userName'];
   
   $ses_sql = mysqli_query($db,"select userName from admin where userName = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['userName'];
   
   if(!isset($_SESSION['userName'])){
      header("location:login.php");
   }
?>
