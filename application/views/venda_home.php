<div class="container-fluid">
	<div class="row text-left">
		<div class="col-sm-12">
			<h3>Lista de Vendas</h3>
		</div>
	</div>

	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><?= anchor('/', 'Home', array()); ?></li>
			<li class="breadcrumb-item active" aria-current="page">Vendas</li>
		</ol>
	</nav>

	<div class="row text-left">
		<div class="col-sm-12 mb-2">
			<?= anchor('venda/cadastro', 'Pedido de Venda', array('class' => 'btn btn-success btn-sm')); ?>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-12">
			<table class="table table-sm">
				<thead>
					<tr>
						<th> # </th>
						<th> Id </th>
						<th>  </th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($vendas->result() as $venda): ?>
					<tr>
						<td> <?= $venda->id ?> </td>
						<td class="text-left"> <?= $venda->id ?> </td>
						<td> <?= $venda->status ?> </td>
						<td class="text-right"> 
							<?= anchor("venda/edita/$venda->id", 'Editar', array('class' => 'btn btn-primary btn-sm')); ?> 
							<?= anchor("venda/remove/$venda->id", 'Excluir', array('class' => 'btn btn-danger btn-sm')); ?></td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>

			<h3><?= $vendas->num_rows(); ?> registro(s)</h3>
			<div class="row">
			</div>
		</div>
	</div>
</div>