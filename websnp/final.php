<html>
<form>
<input id="text" value= '<?php
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
?>' >
</form>
<head>
<style>
.droptarget {
    float: left; 
    width: 1000px; 
    height: 135px;
    margin: 15px;
    padding: 10px;
    border: 1px solid #aaaaaa;
}
</style>
</head>
<body>

<p>Drag the p element back and forth between the two rectangles:</p>

  <p ondragstart="dragStart(event)" draggable="true" id="dragtarget"><?php echo nl2br("$newout", "\n")?></p>

<div class="droptarget" ondrop="drop(event)" ondragover="allowDrop(event)"></div>

<p style="clear:both;"><strong>Note:</strong> drag events are not supported in Internet Explorer 8 and earlier versions or Safari 5.1 and earlier versions.</p>

<p id="demo"></p>

<script>
function dragStart(event) {
    event.dataTransfer.setData("Text", event.target.id);
    document.getElementById("demo").innerHTML = "Started to drag the p element";
}

function allowDrop(event) {
    event.preventDefault();
}

function drop(event) {
    event.preventDefault();
    var data = event.dataTransfer.getData("Text");
    event.target.appendChild(document.getElementById(data));
    document.getElementById("demo").innerHTML = "The p element was dropped";
}
</script>
<select name="cars" multiple>
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="opel">Opel</option>
  <option value="audi"><?php echo nl2br("$newout", "\n"); ?></option>
</select>
<input type="submit">
</body>
</html>

