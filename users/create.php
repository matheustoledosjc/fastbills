<?php
include_once  "../db_connection.php";

$name = $_POST['name'];
$login = $_POST['login'];
$password = $_POST['password'];
$email = $_POST['email'];

$query = "INSERT INTO users (name, login, password, email, created_at) VALUES ('$name',  '$login', '$password', '$email', now())";
mysqli_query($strcon,$query) or die(mysqli_error($strcon));
$row = mysqli_fetch_array(mysqli_query($strcon,"SELECT * FROM users WHERE name='$name' AND login='$login' AND email='$email' LIMIT 1"));
$user_id = $row["id"];
$query_account = "INSERT INTO accounts (user_id, balance) VALUES ('$user_id', 0.0)";
mysqli_query($strcon,$query_account) or die(mysqli_error($strcon));

mysqli_close($strcon);

header("Location: http://127.0.0.1/fastbills/"); exit;
?>