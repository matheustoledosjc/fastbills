<?php include '../assets/public_header.php'; ?>
<div class="container">
	<form action="create.php" method="POST">
		<div class="mb-3">
			<label class="form-label">Nome</label>
			<input type="text" name="name" class="form-control" required="required">
		</div>
		<div class="mb-3">
			<label class="form-label">Login</label>
			<input type="text" name="login" class="form-control" required="required">
		</div>
		<div class="mb-3">
			<label class="form-label">Senha</label>
			<input type="password" name="password" class="form-control" required="required">
		</div>
		<div class="mb-3">
			<label class="form-label">Email</label>
			<input type="email" name="email" class="form-control" required="required">
		</div>

		<button type="submit" class="btn btn-primary">Salvar</button>
	</form>
</div>
<?php include '../assets/footer.php'; ?>