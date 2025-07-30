<?php
// Allow localhost dan semua domain *.railway.app
$host = $_SERVER['HTTP_HOST'] ?? $_SERVER['SERVER_NAME'];

if (!preg_match('/(localhost|127\.0\.0\.1|\.railway\.app)$/', $host)) {
    header("HTTP/1.1 403 Forbidden");
    exit("<h1>403</h1>FORBIDDEN!<br>Sorry Mikhmon doesn't work on ".$host.", please open it at localhost or IP address.");
}
