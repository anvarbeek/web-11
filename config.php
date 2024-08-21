<?php
$localhost = 'localhost';
$username = 'root';
$password = '';
$db_name = 'users_db';

$con = mysqli_connect($localhost,$username,$password,$db_name);

if(!$con){
    die ("Ma'lumotlar bazasiga ulanmagan !!!" .mysqli_connect_error());
}
?>