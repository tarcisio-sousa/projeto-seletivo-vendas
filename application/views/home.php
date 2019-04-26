
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h1 class="text-center"></h1>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h3 class="text-left">Bem vindo!!!</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
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
					<a class="nav-link" href="#">Produtos</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Clientes</a>
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
