<?php
// coded by Gabriel.S

$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, "https://www.google.co.id");

curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

$data = curl_exec( $ch); 

curl_close( $ch); 

echo $data; 
?>
