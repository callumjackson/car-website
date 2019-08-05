<?php

$host = "localhost";
$username = "calzone";
$password = "admin";
$dname = "musslecarautos";


$conn = mysqli_connect($host, $username, $password, $dname);

if (!$conn) {
  die("Connection failed: ". mysqli_connect_error());
}
