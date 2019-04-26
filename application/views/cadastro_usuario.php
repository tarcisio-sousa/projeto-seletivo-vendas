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
				<div class="col-md-4">
				</div>
				<div class="col-md-4">
					<!-- <form role="form"> -->
					<?= form_open('usuario/salvar') ?>
						<div class="form-group row text-right">
							 
							<label for="inputNome" class="col-sm-4 col-form-label">
								Nome
							</label><span class="erro"><?php echo form_error('nome') ?  : ''; ?></span>
							<div class="col-sm-8">
								<input type="text" name="nome" class="form-control" id="nome" value="<?= set_value('nome') ? : (isset($nome) ? $nome : '') ?>" autofocus='true' />
							</div>
						</div>
						<div class="form-group row text-right">
							 
							<label for="inputMatricula" class="col-sm-4 col-form-label">
								Matrícula
							</label><span class="erro"><?php echo form_error('matricula') ?  : ''; ?></span>
							<div class="col-sm-8">
								<input type="text" name="matricula" class="form-control" id="matricula" value="<?= set_value('matricula') ? : (isset($matricula) ? $matricula : '') ?>" />
							</div>
						</div>
						<div class="form-group row text-right">
							 
							<label for="inputPassword" class="col-sm-4 col-form-label">
								Senha
							</label><span class="erro"><?php echo form_error('senha') ?  : ''; ?></span>
							<div class="col-sm-8">
								<input type="password" name="senha" class="form-control" id="inputPassword" value="<?= set_value('senha') ? : (isset($senha) ? $senha : '') ?>" />
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4"><input type='hidden' name="id" value="<?= set_value('id') ? : (isset($id) ? $id : ''); ?>"></div>
							<div class="col-sm-8 text-right">
								<button type="submit" class="btn btn-primary">
									Submit
								</button>
							</div>
						</div>
					<!-- </form> -->
					<?= form_close(); ?>
				</div>
				<div class="col-md-4">
				</div>
			</div>
		</div>
	</body>
</html>
