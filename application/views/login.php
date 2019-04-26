<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
		<meta name="generator" content="Jekyll v3.8.5">
		<title>Login - Projeto Vendas</title>

		<link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sign-in/">

		<!-- Bootstrap core CSS -->
		<?= link_tag('assets/bootstrap/css/bootstrap.min.css') ?>
		<!-- <link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->


		<style>
		.bd-placeholder-img {
		font-size: 1.125rem;
		text-anchor: middle;
		-webkit-user-select: none;
		-moz-user-select: none;
		-ms-user-select: none;
		user-select: none;
		}

		@media (min-width: 768px) {
		.bd-placeholder-img-lg {
		font-size: 3.5rem;
		}
		}
		</style>
		<!-- Custom styles for this template -->
		<link href="signin.css" rel="stylesheet">
		<?= link_tag('assets/signin.css') ?>
	</head>
	<body class="text-center">
		<form class="form-signin">
			<h1 class="h3 mb-3 font-weight-normal">Projeto Vendas</h1>
			<label for="inputEmail" class="sr-only">Matrícula</label>
			<input type="text" id="inputMatricula" class="form-control" placeholder="Matrícula" required autofocus>
			<label for="inputPassword" class="sr-only">Senha</label>
			<input type="password" id="inputPassword" class="form-control" placeholder="Senha" required>
			<div class="checkbox mb-3 text-left">
				<label>
					<input type="checkbox" value="remember-me"> Lembrar senha
				</label>
			</div>
			<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
			<p class="mt-5 mb-3 text-muted">&copy; 2019</p>
		</form>
	</body>
</html>
