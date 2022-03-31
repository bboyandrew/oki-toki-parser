<?php
$ch = curl_init("https://");
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
$res = curl_exec($ch);

echo $res