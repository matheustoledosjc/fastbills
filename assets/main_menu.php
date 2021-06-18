<?php
echo '
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <span class="navbar-text">
      Olá, ',$_SESSION['user_name'],'
    </span>
    <span class="navbar-text">
      Saldo em conta: R$',$_SESSION['user_balance'],'
    </span>    
    <button class="btn btn-outline-success" type="submit" data-toggle="modal" data-target="#revenueModal">Lançar receita</button>
    <button class="btn btn-outline-danger" type="submit" data-toggle="modal" data-target="#expenseModal">Lançar despesa</button>
    <form class="d-flex" action="http://127.0.0.1/fastbills/session/destroy.php">
      <button class="btn btn-outline-danger" type="submit">Sair</button>
    </form>
  </div>
</nav>

<!-- Revenue Modal -->
<div id="revenueModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Lançar receita</h5>
        <button type="button" class="btn-close" data-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <form action="http://127.0.0.1/fastbills/transactions/create.php" method="POST">
          <input type="hidden" id="type" name="type" value="1">
          <input type="hidden" id="user_account_id" name="user_account_id" value="',$_SESSION['user_account_id'],'">
          <div class="mb-3">
            <label for="description" class="col-form-label">Descrição:</label>
            <input type="text" class="form-control" id="description" name="description">
          </div>
          <div class="mb-3">
            <label for="value" class="col-form-label">Valor:</label>
            <input type="number" class="form-control" id="value" name="value">
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Salvar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Expense Modal -->
<div id="expenseModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Lançar despesa</h5>
        <button type="button" class="btn-close" data-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Salvar</button>
      </div>
    </div>
  </div>
</div>
';
?>