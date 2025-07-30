<?php
// allow Railway domain + localhost
$allowed_domains = [
    'localhost',
    '127.0.0.1',
    'mikhmon-railway-production.up.railway.app' // <- ganti ini jika domain kamu berbeda
];

if (!in_array($_SERVER['SERVER_NAME'], $allowed_domains)) {
    header("HTTP/1.1 403 Forbidden");
    exit("<h1>403</h1>FORBIDDEN!<br>Sorry Mikhmon doesn't work on ".$_SERVER['SERVER_NAME'].", please open it at localhost or IP address.");
}