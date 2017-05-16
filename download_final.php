<?php
        include('session.php');
?>

<html>
<head>

<link rel="stylesheet" type="text/css" href="login.css">
<body>

<body class="img"  background="http://webserversnp.eastus.cloudapp.azure.com/websnp/uploads/login1.jpg">

<div id="insetBgd">
        <h1 class="insetType">Cloud Automation HUB</h1>
<div class="signout">
<button type="button" onclick="location.href='logout.php'">Sign Out</button>
</div>
</div>

<div class="inner">
<div id="description-download1">
        <h1 class="description-download1"><br>Migrate IaaS resources</br>from classic to Azure</br> Resource Manager</h1>
</div>
<button type="button" onclick="location.href='download.php'">Download</button>
</div>
<div class="vmcreate">
<div id="description-download2">
        <h1 class="description-download2"><br>Create RM VM from excisting</br>OS DISK</h1>
</div>
<button type="button" onclick="location.href='vmcreate.php'">Download</button>
</div>

<div class="patch-ubuntu">
<div id="description-patch-ubuntu">
        <h1 class="description-patch-ubuntu"><br>Click UBUNTU button to</br>take the latest update</h1>
</div>
<button type="button" onClick="location.href='http://automation.snp.com/patch.php'"><img src="https://assets.ubuntu.com/v1/590018e7-picto-ubuntukylin.svg" height="100px" width="100px"></button>
</div>

<div class="outer">
<div id="description-upload">
        <h1 class="description-upload"><br>Click UPLOAD to upload</br>any important documents</h1>
</div>
<button type="button" onClick="location.href='http://automation.snp.com/upload.php'">UPLOAD</button>
</div>

</body>
</form>
</body>
