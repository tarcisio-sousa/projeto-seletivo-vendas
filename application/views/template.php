<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="Tarcísio Sousa">
		<meta name="generator" content="">
		<title>Bem vindo! - Projeto Vendas</title>

		<!-- Bootstrap core CSS -->
		<?= link_tag('assets/bootstrap/css/bootstrap.min.css') ?>
		<?= link_tag('assets/all.css') ?>
		<?= link_tag('assets/app.css') ?>

		<!-- jQuery first, then Popper.js, then Bootstrap JS -->

		<script src="<?= base_url(); ?>assets/bootstrap/js/jquery.min.js"></script>
		<script src="<?= base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>

	</head>
	<body class="text-center">
		<div class="container">

			<div class="row">
				<div class="col-md-12">
					<h3 class="text-left">Bem vindo!!!</h3>
				</div>
			</div>
<!-- 
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item active" aria-current="page">Home</li>
				</ol>
			</nav> -->

			<div class="row">
				<div class="col-md-3">
					<ul class="nav flex-column nav-pills text-left">
						<li class="nav-item">
							<!-- <a class="nav-link active" href="#">Home</a> -->
							<?= anchor('/', 'Home', array('class' => 'nav-link')); ?>
						</li>
						<li class="nav-item">
							<!-- <a class="nav-link" href="#">Usuários</a> -->
							<?= anchor('usuario', 'Usuários', array('class' => 'nav-link')); ?>
						</li>
						<li class="nav-item">
							<?= anchor('produto', 'Produtos', array('class' => 'nav-link')); ?>
						</li>
						<li class="nav-item">
							<?= anchor('cliente', 'Clientes', array('class' => 'nav-link')); ?>
						</li>
						<li class="nav-item">
							<?= anchor('venda', 'Vendas', array('class' => 'nav-link')); ?>
						</li>
						<li class="nav-item">
							<?= anchor('login/sair', 'Logout', array('class' => 'nav-link')); ?>
						</li>
					</ul>
				</div>

				<?= $content ?>

			</div>
		</div>
		
		<script src="<?= base_url(); ?>assets/all.js"></script>

	</body>
	
</html>
