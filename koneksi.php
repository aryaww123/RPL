<?php
$host="localhost";
$user = "root";
$pass = "";
$database = "rple11";
$koneksi = mysqli_connect($host, $user, $pass, $database);

if(mysqli_connect_error()){
  echo 'GAGAL MELAKUKAN KONEKSI KE DATABASE : '.mysqli_connect_error();
}
?>
