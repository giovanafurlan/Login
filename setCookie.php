<?
setcookie("MyCookie", "subinsb.com", time()+3600);
header("Access-Control-Allow-Origin: https://127.0.0.1:5000");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Methods: GET, POST");
header("Access-Control-Allow-Headers: Content-Type");
?>