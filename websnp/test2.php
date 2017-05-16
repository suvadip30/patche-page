<?php

    $domain = 'ubuntuimage';
    $user = 'SNPAdmin';
    $pass = '$w$np@llow@123';

    header('Content-Encoding: none;');
    set_time_limit(0);

    $connection = ssh2_connect($domain, 22);
    
        if(ssh2_auth_password($connection, $user, $pass)){//If authentication is successful...
                //$h = ssh2_exec($connection, 'ls');
                $h = ssh2_exec($connection, "apt list --upgradable | grep security | awk {'print $1'}");
                $out = ssh2_fetch_stream($h, SSH2_STREAM_STDIO);

                if (ob_get_level() == 0)
                        ob_start();

                while (!feof($out)) {
                        $line = fgets($out);
                        echo $line.'<br />';
                        echo str_pad('', 4096);
                        ob_flush();
                        flush();
                        sleep(1);
                }

                fclose($out);
                ob_end_flush();
        }
        
?>
