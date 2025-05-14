<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center justify-content-center" style="height: 100vh;">

	<div class="card shadow p-4" style="min-width: 350px;">
		<h1 class="text-center mb-4">Bem-vindo</h1>

		<form method="post" action="login.php">
			<div class="mb-3">
				<label class="form-label">Digite o nome do usuário</label>
				<input type="text" name="usuario" placeholder="Nome do usuário" class="form-control">
			</div>
			<form method="post" action="login.php">
			<div class="mb-3">
				<label class="form-label">Digite o seu email</label>
				<input type="text" name="email" placeholder="Email" class="form-control">
			</div>
			
			<div class="mb-3">
				<label class="form-label">Digite a senha</label>
				<input type="password" name="senha" placeholder="Senha" class="form-control">
			</div>
			
			<div class="d-grid">
				<input type="submit" value="Entrar" class="btn btn-primary">
			</div>
		</form>

		<?php if (isset($_GET['erro'])){ ?>
			<div class="alert alert-danger mt-3" role="alert">
				Usuário e/ou senha inválido(s).
			</div>
		<?php } ?>
	</div>

</body>
</html>
