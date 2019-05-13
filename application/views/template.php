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

		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="<?= base_url(); ?>assets/bootstrap/js/jquery.min.js"></script>

		<script src="<?= base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>

	</head>
	<body class="text-center">
		<div class="container">
			<?= $content ?>
		</div>
		<script src="<?= base_url(); ?>assets/js/angular.js"></script>
		<script src="<?= base_url(); ?>assets/js/angular-resource.js"></script>
	</body>
	
</html>
