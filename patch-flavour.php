<!doctype html>
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

<form action="shell.php" method="get">

<div class="form2">
<div id="otp">
<h3 class="otp"></h3>
<p><br><?php
include('session.php');
$field0 = $_GET["ipaddress"];
$field1 = $_GET["hostname"];
$field2 = $_GET["username"];
$field3 = "apt list --upgradable | grep security | awk {'print $1'}| sed 's/.trusty-updates,trusty-security//'";
$field4 = $_GET["password"];
$conn = ssh2_connect("$field1", 22);
ssh2_auth_password($conn, "$field2", "$field4");

ssh2_scp_send($conn, '/tmp/fromweb', '/tmp', 0700);

$stream = ssh2_exec($conn, "$field3");
stream_set_blocking($stream, true);
$stream_out = ssh2_fetch_stream($stream, SSH2_STREAM_STDIO);
$outtext = stream_get_contents($stream_out);
if(!($newout=str_replace(",", " ", $outtext))){
echo nl2br("$newout", "\n");
echo nl2br("you do not have any patches to apply");
}
else{
echo "You have below patches to apply";
echo nl2br("$newout", "\n");
}
?><p></br>
</div>
</div>

<div class="form1">
<div id="description2">
  <h1 class="description2">Server Information.</h1>
<div id="description3">
  <h2 class="description3">
<p><br>In the command section it is a</br> default value, you can change</br> the command section accordingly.</br></p>

Please check once again before</br> clicking Submit button.</h2>

<ul>
<li>
  <input type="text" name="ipaddress" value='<?php echo ("$field0");?>' readonly placeholder="ipaddress" ><br>
  <span>This is your IPADDRESS output</span>
</li>
<li>
  <input type="text" name="hostname" value='<?php echo ("$field1");?>' readonly placeholder="hostname"><br>
  <span>This is your  HOSTNAME  output</span>
</li>
<li>
  <input type="text" name="username" value='<?php echo ("$field2");?>' readonly placeholder="username"><br>
  <span>This is your  USERNAME  output</span>
</li>
<li>
  <input type="password" name="password" value='<?php echo ("$field4");?>' readonly placeholder="password"><br>
  <span>This is your  PASSWORD  output</span>
<li>
  <input type"text" name="command"  value='<?php $newbee= nl2br("$newout", "\n");echo str_replace("<br />", " ", $newbee);?> ' placeholder="Place your own patches to execute."><br>
</select>
<button type="submit" value="Submit">SUBMIT</button>
</div>
</div>
</div>

</form>
</body>
    </html>
