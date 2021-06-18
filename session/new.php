<?php include_once  "../db_connection.php" ?>
<?php
// Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
if (!empty($_POST) AND (empty($_POST['login']) OR empty($_POST['password']))) {
    header("Location: index.php"); exit;
}

$login = $_POST['login'];
$password = $_POST['password'];

$sql = "SELECT u.id, u.name, a.id AS account_id, a.balance FROM users u, accounts a WHERE u.id = a.user_id AND (u.login = '".$login ."') AND (u.password = '".$password."') LIMIT 1";
$query = mysqli_query($strcon, $sql);
if (mysqli_num_rows($query) != 1) {
    echo "Login inválido!"; exit;
} else {
    $result = mysqli_fetch_assoc($query);

    if (!isset($_SESSION)) session_start();

		$_SESSION['user_id'] = $result['id'];
        $_SESSION['user_name'] = $result['name'];
        $_SESSION['user_account_id'] = $result['account_id'];
		$_SESSION['user_balance'] = $result['balance'];

    header("Location: http://127.0.0.1/fastbills/"); exit;
}
?>