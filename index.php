<?php 
include_once  "db_connection.php";
include 'assets/header.php';
?>

<div class="container">
	<table class="table table-hover">
		<thead>
			<th scope="col">ID</th>
			<th scope="col">Tipo</th>
			<th scope="col">Descrição</th>
			<th scope="col">Valor</th>
		</thead>
		<tbody>
			<?php
				$user_id = $_SESSION["user_id"];
				$sql = "SELECT t.id, t.type, t.description, t.value FROM transactions t, accounts a WHERE t.account_id = a.id AND a.user_id=$user_id";
				$exec  = mysqli_query($strcon,$sql);
				while($row = mysqli_fetch_array($exec)){
				echo '<tr>';
				echo '<td>',$row["id"],'</td>';
				if ($row["type"] == 1) {
					echo '<td>RECEITA</td>';
				} else {
					echo'<td>DESPESA</td>';
				}
				echo '<td>',$row["description"],'</td>';
				echo '<td>',$row["value"],'</td>';
				echo '</tr>';
				}
			?>
		</tbody>
	</table>
</div>

<?php include 'assets/footer.php'; ?>