<div class="container-fluid">
	<div class="row text-left">
		<div class="col-sm-12">
			<h3>Lista de Clientes</h3>
		</div>
	</div>

	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><?= anchor('/', 'Home', array()); ?></li>
			<li class="breadcrumb-item active" aria-current="page">Clientes</li>
		</ol>
	</nav>

	<div class="row text-left">
		<div class="col-sm-12 mb-2">
			<?= anchor('cliente/cadastro', 'Novo Cliente', array('class' => 'btn btn-success btn-sm')); ?>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-12">
			<table class="table table-sm">
				<thead>
					<tr>
						<th> # </th>
						<th> Nome </th>
						<th> CPF </th>
						<th> Status </th>
						<th>  </th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($clientes->result() as $cliente): ?>
					<tr>
						<td> <?= $cliente->id ?> </td>
						<td class="text-left"> <?= $cliente->nome ?> </td>
						<td class="text-left"> <?= $cliente->cpf ?> </td>
						<td> <?= $cliente->status ?> </td>
						<td class="text-right"> 
							<?= anchor("cliente/edita/$cliente->id", 'Editar', array('class' => 'btn btn-primary btn-sm')); ?> 
							<?= anchor("cliente/remove/$cliente->id", 'Excluir', array('class' => 'btn btn-danger btn-sm')); ?></td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>

			<h3><?= $clientes->num_rows(); ?> registro(s)</h3>
			<div class="row">
			</div>
		</div>
	</div>
</div>