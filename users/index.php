<?php include_once  "../db_connection.php" ?>
<?php include '../assets/header.php'; ?>
<div class="container">
	<table class="table table-hover">
		<thead>
			<th scope="col">ID</th>
			<th scope="col">Nome</th>
			<th scope="col">Login</th>
			<th scope="col">Senha</th>
			<th scope="col">Email</th>
			<th scope="col">Data de criação</th>
		</thead>
		<tbody>
			<?php
				$sql = "select * from users";
				$exec  = mysqli_query($strcon,$sql);
				while($row = mysqli_fetch_array($exec)){
				echo '<tr>';
				echo '<td>',$row["id"],'</td>';
				echo '<td>',$row["name"],'</td>';
				echo '<td>',$row["login"],'</td>';
				echo '<td>',$row["password"],'</td>';
				echo '<td>',$row["email"],'</td>';
				echo '<td>',$row["created_at"],'</td>';
				echo '</tr>';
				}
			?>
		</tbody>
	</table>
</div>
<?php include '../assets/footer.php'; ?>
