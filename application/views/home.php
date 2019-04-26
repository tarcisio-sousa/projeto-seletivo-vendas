
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h3 class="text-left">Bem vindo!!!</h3>
		</div>
	</div>

	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item active" aria-current="page">Home</li>
		</ol>
	</nav>

	<div class="row">
		<div class="col-md-3">
			<ul class="nav flex-column nav-pills">
				<li class="nav-item">
					<!-- <a class="nav-link active" href="#">Home</a> -->
					<?= anchor('/', 'Home', array('class' => 'nav-link active')); ?>
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
					<a class="nav-link" href="#">Venda</a>
				</li>
				<li class="nav-item">
					<?= anchor('login/sair', 'Logout', array('class' => 'nav-link')); ?>
				</li>
			</ul>
		</div>
	</div>
</div>
