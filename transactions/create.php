<?php
include_once  "../db_connection.php";

$account_id = $_POST['user_account_id'];
$description = $_POST['description'];
$type = $_POST['type'];
$value = $_POST['value'];
$date = $_POST['date'];

$account_data = mysqli_fetch_array(mysqli_query($strcon,"SELECT * FROM accounts WHERE id='$account_id' LIMIT 1"));
$current_balance = $account_data["balance"];
if ($type == 1) {
$new_balance = $current_balance + $value;
} else {
$new_balance = $current_balance - $value;
}

$insert_query = "INSERT INTO transactions (account_id, description, type, value, date) VALUES ('$account_id',  '$description', '$type', '$value', '$date')";
$update_account_balance_query = "UPDATE accounts SET balance='$new_balance' WHERE id='$account_id'";

mysqli_query($strcon,$insert_query) or die(mysqli_error($strcon));
mysqli_query($strcon,$update_account_balance_query) or die(mysqli_error($strcon));
mysqli_close($strcon);

header("Location: http://127.0.0.1/fastbills/"); exit;
?>