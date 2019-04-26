<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
		<meta name="generator" content="Jekyll v3.8.5">
		<title>Cadastro Usuário - Projeto Vendas</title>

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
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<h3 class="text-center">
						Formulário de cadastro usuário
					</h3>
				</div>
			</div>
			<div class="row">

				<div class="col-md-12">
					<div class="row">
						<div class="alert alert-success text-center">
							<?= $mensagem; ?>
						</div>
					</div>
					<div class="row text-center">
						<?= anchor('', 'Página Inicial');  ?>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
