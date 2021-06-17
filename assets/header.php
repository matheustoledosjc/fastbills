<?php
if (!isset($_SESSION)) session_start();

if (!isset($_SESSION['user_id'])) {
	session_destroy();
	header("Location: http://127.0.0.1/fastbills/login.php"); exit;
}
?>
<?php include 'public_header.php'; ?>
<?php include 'main_menu.php'; ?>