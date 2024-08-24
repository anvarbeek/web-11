

<?php
$severance = "localhost";
$username = "root";
$password = "";
$dbname = "users_db";

$con = mysqli_connect($severance, $username, $password, $dbname);

if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
?>