<?php 
include_once  "db_connection.php";
include 'assets/header.php';
?>

<div class="container">
	<table class="table table-hover">
		<thead>
			<th scope="col">Tipo</th>
			<th scope="col">Descrição</th>
			<th scope="col">Valor</th>
			<th scope="col">Data</th>
			<th scope="col">Apagar</th>
		</thead>
		<tbody>
			<?php
				$user_id = $_SESSION["user_id"];
				$sql = "SELECT t.id, t.type, t.description, t.value, t.date, a.id as account_id FROM transactions t, accounts a WHERE t.account_id = a.id AND a.user_id=$user_id ORDER BY t.date DESC";
				$exec  = mysqli_query($strcon,$sql);
				while($row = mysqli_fetch_array($exec)){
				echo '<tr>';
				if ($row["type"] == 1) {
					echo '<td><i class="fas fa-plus-circle text-success"></i> RECEITA</td>';
				} else {
					echo'<td><i class="fas fa-minus-circle text-danger"></i> DESPESA</td>';
				}
				echo '<td>',$row["description"],'</td>';
				echo '<td> R$ ',$row["value"],'</td>';
				echo '<td>',$row["date"],'</td>';
				echo '<td><a href="http://127.0.0.1/fastbills/transactions/delete.php?account_id=',$row["account_id"],'&&transaction_id=',$row["id"],'&&transaction_type=',$row["type"],'&&transaction_value=',$row["value"],'"><i class="fas fa-trash"></i></a></td>';
				echo '</tr>';
				}
			?>
		</tbody>
	</table>
</div>
<?php include 'assets/footer.php'; ?>

