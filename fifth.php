<?php
echo '<pre>';
var_dump($_SERVER["REMOTE_ADDR"]);
echo '</pre>';

$ip_address = gethostbyname("www.kconsultancy.ae");
// $ip_address = $_SERVER['HTTP_CLIENT_IP'];
echo "Google IP address is " . $ip_address;
