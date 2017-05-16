<?php
        include('session.php');
?>

<html>
<head>

<link rel="stylesheet" type="text/css" href="patch.css">
<body>
<div id="insetBgd">
        <h1 class="insetType">Cloud Automation HUB</h1>
</div>
<div class="signout">
<button type="button" onclick="location.href='logout.php'">Sign Out</button>
</div>
</div>

<form action="patch-flavour.php" method="get">

  <div class="form">
<div id="description">
  <h1 class="description">Fill the SERVER Details</h1>
<div id="description1">
  <h2 class="description1">To fill the basic server details, please provide us with some basic information using
  the IP Address and hostname. Please use valid credentials.</h2>

   <input type="text"name="ipaddress" placeholder="ipaddress">
   <input type="text" name="hostname" placeholder="hostname">
   <input type="text" name="username" placeholder="username">
   <input type="password" name="password" placeholder="password">

  <button type="submit" value="Submit">PROCEED</button>
</div>  
</div>
</div>
<body class="img"  background="http://webserversnp.eastus.cloudapp.azure.com/websnp/uploads/login1.jpg">
</body>
</form>
</body>
</body>
</html>
