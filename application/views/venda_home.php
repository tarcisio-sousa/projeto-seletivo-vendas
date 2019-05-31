<div class="col-sm-9">
	<!-- <div class="row text-left">
		<div class="col-sm-12">
			<h3>Lista de Vendas</h3>
		</div>
	</div> -->

	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><?= anchor('/', 'Home', array()); ?></li>
			<li class="breadcrumb-item active" aria-current="page">Vendas</li>
		</ol>
	</nav>

	<!-- <div class="row text-left">
		<div class="col-sm-12 mb-2">
			<?= anchor('venda/cadastro', 'Pedido de Venda', array('class' => 'btn btn-success btn-sm')); ?>
		</div>
	</div> -->

	<div class="row">
		<div class="col-sm-12">
			<table class="table table-sm">
				<thead>
					<tr>
						<th> # </th>
						<th> Forma de Pagamento </th>
						<th> Valor Total </th>
						<th> <?= anchor('venda/cadastro', 'NEW', array('class' => 'btn btn-success btn-sm float-right')); ?> </th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($vendas->result() as $venda): ?>
					<tr>
						<td> <?= $venda->id ?> </td>
						<td class="text-center"> <?= $venda->forma_pagamento ?> </td>
						<td class="text-right"> <?= $venda->valor_total ?> </td>
						<td class="text-right"> 
							<div class="btn-group">
							<?= anchor("venda/edita/$venda->id", '<i class="fas fa-edit"></i>', array('class' => 'btn btn-outline-info btn-sm')); ?> 
							<?= anchor("venda/remove/$venda->id", '<i class="fas fa-eraser"></i>', array('class' => 'btn btn-outline-danger btn-sm')); ?>
							</div>
						</td>
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