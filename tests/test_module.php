<?php

// Renombrar settings
rename('../www/settings.php.dist', '../www/settings.php');

$datas = array(
    "w" => "ejemplo",
    "r" => "hola"
);

// POST
$curl = curl_init('/www/api.php');
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, $datas);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($curl);
curl_close($curl);

echo $response;
?>
