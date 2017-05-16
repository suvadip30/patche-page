<?php
include('session.php');
$field0 = "23.96.9.54";
$field1 = "ubuntucloud";
$field2 = "SNPAdmin";
$field3 = "apt list --upgradable | grep security | awk '{print $1}' | sed 's/.trusty-updates//'";
$field4 = '$w$np@llow@123';
$conn = ssh2_connect("$field1", 22);
ssh2_auth_password($conn, "$field2", "$field4");

ssh2_scp_send($conn, '/tmp/fromweb', '/tmp', 0700);

$stream = ssh2_exec($conn, "$field3");
stream_set_blocking($stream, true);
$stream_out = ssh2_fetch_stream($stream, SSH2_STREAM_STDIO);
$outtext = stream_get_contents($stream_out);
if(!($newout=str_replace(",", " ", $outtext))){
echo nl2br("$newout", "\n");
echo "you do not have any patches :(";
}
else{
echo "You have below patches to apply\n";
echo nl2br("$newout", "\n");
}

?>
