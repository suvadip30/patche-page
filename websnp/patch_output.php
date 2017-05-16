<html>
<body>
<select name="cars" multiple>
<option value="test"><?php
$field1 = $_GET["hostname"];
$field2 = $_GET["username"];
$field3 = "apt list --upgradable | grep security | awk {'print $1'}| sed 's/.trusty-updates,trusty-security//'";
$field4 = $_GET["password"];

header('Content-Encoding: none;');
    set_time_limit(0);

$conn = ssh2_connect("$field1", 22);
if(ssh2_auth_password($conn, "$field2", "$field4")){

$handle = ssh2_exec($conn, "$field3");
$out = ssh2_fetch_stream($handle, SSH2_STREAM_STDIO);
$url = "http://automation.snp.com/websnp/jquery.html";

                if (ob_get_level() == 0)
                        ob_start();

                while (!feof($out)) {
                        $line = fgets($out);
                        echo $line.'<br />';
                        echo str_pad('', 4096);
                        ob_flush();
                        flush();
                       # sleep(1);
                }
fclose($out);
   ob_end_flush();
        }

?></option>
</body>
</html>
