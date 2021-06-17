<?php
echo '
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <span class="navbar-text">
      Olá, ',$_SESSION['user_name'],'
    </span>
    <form class="d-flex" action="http://127.0.0.1/fastbills/session/destroy.php">
      <button class="btn btn-outline-danger" type="submit">Sair</button>
    </form>
  </div>
</nav>
';
?>