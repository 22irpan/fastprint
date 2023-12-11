<?php


$username='tesprogrammer101223C16';
$password='bisacoding-10-12-23';
$URL='https://recruitment.fastprint.co.id/tes/api_tes_programmer';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$URL);
curl_setopt($ch, CURLOPT_TIMEOUT, 30); //timeout after 30 seconds
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");

$result=curl_exec ($ch);

$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);   //get status code
curl_close ($ch);
echo $result;

var_dump(json_decode($result));
//$obj = json_decode($result);
//print $obj->{'nama_produk'}; 
//echo $obj->{'harga'};