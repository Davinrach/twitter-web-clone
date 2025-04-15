<?php
$host = '172.30.160.1';
$port = '5432';
$dbname = 'Twitter';
$user = 'postgres';
$password = 'lekdap123';

function koneksidb()
{
    global $host, $port, $dbname, $user, $password;
    $conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");
    if (!$conn) {
        echo "Koneksi gagal.";
    }
    return $conn;
}
?>