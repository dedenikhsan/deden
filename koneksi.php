<?php
$host = '127.0.0.1';
$user = 'root';
$pass = 'root';
$db   = 'deden_sql';

$koneksi = new mysqli($host, $user, $pass, $db);

if ($koneksi->connect_error) {
  die("Koneksi gagal: " . $koneksi->connect_error);
}
?>
