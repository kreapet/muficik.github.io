<?php
// $webhookurl = "https://discord.com/api/webhooks/845950238719213608/OlWrovNwzQIgXHqGL1zlw5AyeMUg5M_QtCfXNqs7zDI1zlIv1gml_aET2InT6iBXyuaf";
$ip= $_SERVER['REMOTE_ADDR'];

$file = "ips.txt";
$text = file_get_contents($file);
$text .= $ip . "\n";
file_put_contents($file, $text);

?>