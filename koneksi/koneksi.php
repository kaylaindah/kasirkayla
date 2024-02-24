<?php
$server = "Localhost";
$user   = "root";
$password   = "";
$database   ="dbkasir";

$con    = new mysqli ($server,$user,$password,$database);

if (!$con) {
    die("<script>alert('Tidak terhubung dengan database')</script>");
}
?>
