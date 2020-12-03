<?php 
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'tpecom';

$konek = mysqli_connect($server, $username, $password) or die('koneksi gagal');
mysqli_select_db($konek, $database) or die('database tidak bisa dibuka');
?>