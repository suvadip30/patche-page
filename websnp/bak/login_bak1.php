<?php 
include("config.php");
/* 
$ID = $_POST['user']; 
$Password = $_POST['pass']; 
*/ 
function SignIn() 
{ 
session_start(); //starting the session for user profile page 
if(!empty($_POST['user'])) //checking the 'user' name which is from Sign-In.html, is it empty or have some text 
{ 
$query = mysql_query("SELECT * FROM UserName where userName = '$_POST[user]' AND pass = '$_POST[pass]'") or die(mysql_error()); 
$row = mysql_fetch_array($query) or die(mysql_error()); 
if(!empty($row['userName']) AND !empty($row['pass'])) 
{ 
$_SESSION['userName'] = $row['pass']; 
header("location: download_final.php");
echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE..."; 
} 
else 
{ 
echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY..."; 
} 
} 
} 
if(isset($_POST['submit'])) 
{ 
SignIn(); 
} 
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Sign-In</title>
</head>
<link rel="stylesheet" type="text/css" href="login.css">
<body>
<form CLASS="register-form" method="POST" action="login_bak1.php">
<body class="img"  background="http://webserversnp.eastus.cloudapp.azure.com/websnp/uploads/test2.jpg">
<div class="login-page" id="Sign-In">
  <div class="form">
      <input type="text" placeholder="name"/>
      <input type="password" placeholder="password"/>
      <button>LOGIN</button>
  </div>
</div>

</form>
</body>
</html>

