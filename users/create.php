<?php
include_once  "db_connection.php";

$name = $_POST['name'];
$login = $_POST['login'];
$password = $_POST['password'];
$email = $_POST['email'];

$query = "INSERT INTO users (name, login, password, email, created_at) VALUES ('$name',  '$login', '$password', '$email', now())";
mysqli_query($strcon,$query) or die(mysqli_error($strcon));
mysqli_close($strcon);

$url = $_SERVER['HTTP_REFERER'];
header("Location:".$url);
?>