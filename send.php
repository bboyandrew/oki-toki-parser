<?php

$url = "https://noname.oki-toki.net/api/v1/dialers/create_task";

$data = array(
    "api_token" => "libero",
    "dialer_id" => "1",
    "phones" => "12345,122344";

/*
'contact_id' => '1',
 'bp_id' => '1',
 'date' => '21.02.2017 12:00:00',
 'import_id' => '1',
 'region' => 'Europe/Kiev',
 'ttl' => '3600',
 'user_id' => '1',
 'details' => '{“name”:”John”, “order”:”12”}',
 'force_create' => '1',
 'reset_task_id' => '1234',;
*/

$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url . '?' . http_build_query($data));


$response = curl_exec($ch);
$data = json_decode($response, true);
curl_close($ch);

echo "<pre>";
print_r($data);