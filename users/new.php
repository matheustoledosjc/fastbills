<?php include '../assets/header.php'; ?>
<div class="container">			
	<form>
		<div class="mb-3">
			<label class="form-label">Nome</label>
			<input type="text" name="name" class="form-control">
		</div>
		<div class="mb-3">
			<label class="form-label">Login</label>
			<input type="text" name="login" class="form-control">
		</div>
		<div class="mb-3">
			<label class="form-label">Senha</label>
			<input type="text" name="password" class="form-control">
		</div>
		<div class="mb-3">
			<label class="form-label">Email</label>
			<input type="text" name="email" class="form-control">
		</div>

		<button type="submit" class="btn btn-primary">Salvar</button>
	</form>
</div>
<?php include '../assets/footer.php'; ?>