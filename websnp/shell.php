<?php
$field1 = $_GET["ipaddress"];
$field2 = $_GET["hostname"];
$field3 = $_GET["username"];
$field4 = $_GET["password"];
$field5 = $_GET["command"];
$field6 = 'subdir';
$field7 = 'ubuntu_test';
$openquote = '"';
$openbrace = '{';
$closebrace = '}';
#$slash = '/';
$field8 = "$openbrace$openquote$field7$openquote :$openbrace$openquote$field6$openquote: $openquote$field5$openquote$closebrace$closebrace";

echo "$field1 $field2 $field3 $field4 $field5 $field6 $field7 $field8";
//Obviously, this is a temporary location :D
#echo shell_exec("sudo -u root -S /bin/sh /tmp/ubuntu-bootstrap.sh '$field1' '$field2' > /tmp/password");
$output =  shell_exec("sudo -u root -S /bin/knife bootstrap '$field1' --ssh-user '$field3' --ssh-password '$field4' --sudo --use-sudo-password --node-name '$field2' --run-list 'recipe[ubuntu_test]' --json-attributes '$field8' --node-ssl-verify-mode none > /tmp/password 2>&1");
#echo shell_exec("sudo -u root -S cat /tmp/ubuntu-bootstrap.sh > /tmp/password 2>&1");
#echo $output1;
echo "<pre>$output</pre>";
while (@ ob_end_flush()); // end all output buffers if any

$proc = popen($output, 'r');
echo '<pre>';
while (!feof($proc))
{
    echo fread($proc, 4096);
    @ flush();
}
echo '</pre>';
#echo "<pre>$output2</pre>";
?>
