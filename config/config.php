<?php
// allow Railway domain + localhost
$allowed_host = $_SERVER['HTTP_HOST'] ?? $_SERVER['SERVER_NAME'];
if (!preg_match('/(localhost|127\.0\.0\.1|\.railway\.app)$/', $allowed_host)) {
    header("HTTP/1.1 403 Forbidden");
    exit("<h1>403</h1>FORBIDDEN!<br>Sorry Mikhmon doesn't work on ".$allowed_host.", please open it at localhost or IP address.");
}


if (!in_array($_SERVER['SERVER_NAME'], $allowed_domains)) {
    header("HTTP/1.1 403 Forbidden");
    exit("<h1>403</h1>FORBIDDEN!<br>Sorry Mikhmon doesn't work on ".$_SERVER['SERVER_NAME'].", please open it at localhost or IP address.");
}