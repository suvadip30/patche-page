<?php
$conn = ssh2_connect('ubuntuimage', 22);
ssh2_auth_password($conn, 'SNPAdmin', '$w$np@llow@123');

ssh2_scp_send($conn, '/tmp/fromweb', '/tmp', 0700);

$stream = ssh2_exec($conn, "apt list --upgradable | grep security | awk '{print $1}' | sed 's/.trusty-updates,trusty-security//'");
stream_set_blocking($stream, true);
$stream_out = ssh2_fetch_stream($stream, SSH2_STREAM_STDIO);
$outtext = stream_get_contents($stream_out);
$newout=str_replace(",", " ", $outtext);
#$arr=explode(PHP_EOL, $newout);
echo nl2br("$newout", "\n");
?>
<select name="State" size="5" multiple="multiple">
<?php
foreach ($newout as $key) {
    echo '<option value="<?php echo nl2br("$key")?>"></option>';
}
?>
</select>
