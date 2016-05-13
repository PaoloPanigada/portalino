<!-- ####### INIZIO FILE "script_PHP_invio.php" ####### //-->

<?php

$user = $_POST['user'];
$pass = $_POST['pass'];
$rcpt = $_POST['rcpt'];
$data = $_POST['data'];
$sender = $_POST['sender'];
$qty = $_POST['qty'];

/* non modificare sotto */

var_dump(httpPost(array(
'user' => $user,
'pass' => $pass,
'rcpt' => $rcpt,
'data' => $data,
'sender' => $sender,
'qty' => $qty
),
'sms.pubblicitalocale.net'
));

function httpPost($fields, $host = 'sms.pubblicitalocale.net', $url = '/sms/send.php')
{
$qs = array();
foreach ($fields as $k => $v)
$qs[] = $k.'='.urlencode($v);
$qs = join('&', $qs);

$errno = $errstr = '';
if ($fp = @fsockopen('sms.pubblicitalocale.net', 80, $errno, $errstr,
30))
{
fputs($fp, "POST ".$url." HTTP/1.0\r\n");
fputs($fp, "Host: ".$host."\r\n");
fputs($fp, "User-Agent: PHP/".phpversion()."\r\n");
fputs($fp,
"Content-Type:application/x-www-form-urlencoded\r\n");
fputs($fp, "Content-Length: ".strlen($qs)."\r\n");
fputs($fp, "Connection: close\r\n");
fputs($fp, "\r\n".$qs);

$content = '';
while (!feof($fp))
$content .= fgets($fp, 1024);

fclose($fp);

return preg_replace("/^.*?\r\n\r\n/s", '', $content);
}

return false;
}

?>

<!-- ####### FINE FILE "script_PHP_invio.php" ####### //-->


