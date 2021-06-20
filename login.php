<?php include 'assets/public_header.php'; ?>
<div class="container">
	<form action="session/new.php" method="POST">
		<div class="mb-3">
			<label class="form-label">Login</label>
			<input type="text" name="login" class="form-control" required="required">
		</div>
		<div class="mb-3">
			<label class="form-label">Senha</label>
			<input type="password" name="password" class="form-control" required="required">
		</div>

		<button type="submit" class="btn btn-primary">Entrar</button>
		<button type="button" class="btn btn-primary" onclick="location.href = 'http://127.0.0.1/fastbills/users/new.php';">Criar conta</button>
	</form>
</div>
<?php include 'assets/footer.php'; ?>