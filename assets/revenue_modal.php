<?php echo '
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
          <label for="value" class="form-label">Valor:</label>
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">R$</span>
            <input type="number" step="0.01" class="form-control" id="value" name="value" aria-describedby="basic-addon3">
          </div>
          <div class="mb-3">
            <label for="date" class="col-form-label">Data:</label>
            <input type="date" class="form-control" id="date" name="date">
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Salvar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>';
?> 