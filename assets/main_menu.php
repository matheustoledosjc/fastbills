<?php
$user_id = $_SESSION['user_id'];
$row = mysqli_fetch_array(mysqli_query($strcon,"SELECT * FROM accounts WHERE user_id='$user_id' LIMIT 1"));
$user_balance = $row['balance'];

echo '  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <span class="navbar-text">
        Olá, ',$_SESSION['user_name'],'
      </span>
';?>
<?php
if ($_SESSION['user_admin'] == true){  echo' 
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://127.0.0.1/fastbills/users/">Administrar Usuários</a>
        </li>
      </ul>';
}    
?>
<?php echo'
      <span class="navbar-text">
        Saldo em conta: R$',$user_balance,'
      </span>    
      <button class="btn btn-outline-success" type="submit" data-toggle="modal" data-target="#revenueModal">Lançar receita</button>
      <button class="btn btn-outline-danger" type="submit" data-toggle="modal" data-target="#expenseModal">Lançar despesa</button>
      <form class="d-flex" action="http://127.0.0.1/fastbills/session/destroy.php">
        <button class="btn btn-outline-danger" type="submit">Sair</button>
      </form>
    </div>
  </nav>
';

include 'revenue_modal.php';
include 'expense_modal.php';
?>