<?php

// Renombrar settings
rename('../www/settings.php.dist', '../www/settings.php');

$datas = array(
    "w" => "ejemplo",
    "r" => "hola"
);

// POST
if (file_exists('../www/api.php'))
    echo "Check 1";

if (file_exists(__DIR__ . '/www/api.php'))
    echo "Check 2";

echo __DIR__;

$curl = curl_init('../www/api.php');
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, $datas);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($curl);
curl_close($curl);

echo $response;

echo "ok";
?>
