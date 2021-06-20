<?php include_once  "../db_connection.php" ?>
<?php include '../assets/header.php'; ?>
<div class="container yield">
<?php if ($_SESSION['user_admin'] == true) {
echo'
	<h2>Usuários cadastrados</h2>
	<table class="table table-hover">
		<thead>
			<th scope="col">ID</th>
			<th scope="col">Nome</th>
			<th scope="col">Login</th>
			<th scope="col">Email</th>
			<th scope="col">Admin?</th>
			<th scope="col">Data de criação</th>
		</thead>
		<tbody>
		';

				$sql = "select * from users";
				$exec  = mysqli_query($strcon,$sql);
				while($row = mysqli_fetch_array($exec)){
				echo '	<tr>
				';
				echo '<td>',$row["id"],'</td>
				';
				echo '<td>',$row["name"],'</td>
				';
				echo '<td>',$row["login"],'</td>
				';
				echo '<td>',$row["email"],'</td>
				';
				if ($row["admin"] == true) {
						echo '<td>SIM</td>';
				} else {
						echo '<td>NÃO</td>';					
				}
				echo '<td>',$row["created_at"],'</td>
				';
				echo '</tr>';
				}

echo'
		</tbody>
	</table>
';
} else{echo'<h1>Acesso negado!</h1>';}?>
</div>
<?php include '../assets/footer.php'; ?>
