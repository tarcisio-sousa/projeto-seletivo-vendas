<div class="row text-left">
	<div class="col-sm-12">
		<h3>Tela do usuário</h3>
	</div>
</div>

<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><?= anchor('/', 'Home', array()); ?></li>
		<li class="breadcrumb-item active" aria-current="page">Usuários</li>
	</ol>
</nav>
<div class="row text-left">
	<div class="col-sm-12">
		
		<?= anchor('usuario/cadastro', 'Novo Cadastro', array('class' => 'btn btn-success')); ?>

	</div>
</div>