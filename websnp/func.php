
<?php
$conn = ssh2_connect('ubuntuimage', 22);
ssh2_auth_password($conn, 'SNPAdmin', '$w$np@llow@123');
ssh2_scp_send($conn, '/tmp/fromweb', '/tmp', 0700);
$stream = ssh2_exec($conn, "apt list --upgradable | grep security | awk '{print $1}' | sed 's/.trusty-updates,trusty-security//'");
stream_set_blocking($stream, true);
$stream_out = ssh2_fetch_stream($stream, SSH2_STREAM_STDIO);
$outtext = stream_get_contents($stream_out);
$newout=str_replace(",", " ", $outtext);
function get_func()
{
$opt = array($newout);
$str='';
foreach($opt as $k=>$v)
{
 $str.='<option value"'.$v.'">'.$k.'</option>';
}
return $str;
echo $opt;
}
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<select multiple="multiple">
<?php
echo get_func();
?>
</select>
</body>
</html>
