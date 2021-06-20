<?php
include_once  "../db_connection.php";

$account_id = $_GET['account_id'];
$transaction_id = $_GET['transaction_id'];
$transaction_type = $_GET['transaction_type'];
$transaction_value = $_GET['transaction_value'];

$account_data = mysqli_fetch_array(mysqli_query($strcon,"SELECT * FROM accounts WHERE id='$account_id' LIMIT 1"));
$current_balance = $account_data["balance"];
if ($transaction_type == 1) {
$new_balance = $current_balance - $transaction_value;
} else {
$new_balance = $current_balance + $transaction_value;
}

$delete_query = "DELETE FROM transactions WHERE id='$transaction_id'";
$update_account_balance_query = "UPDATE accounts SET balance='$new_balance' WHERE id='$account_id'";

mysqli_query($strcon,$delete_query) or die(mysqli_error($strcon));
mysqli_query($strcon,$update_account_balance_query) or die(mysqli_error($strcon));
mysqli_close($strcon);

header("Location: http://127.0.0.1/fastbills/"); exit;
?>