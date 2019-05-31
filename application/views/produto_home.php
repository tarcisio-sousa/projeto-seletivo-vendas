<div class="col-sm-9">
	<!-- <div class="row text-left">
		<div class="col-sm-12">
			<h3>Lista de Produtos</h3>
		</div>
	</div> -->

	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><?= anchor('/', 'Home', array()); ?></li>
			<li class="breadcrumb-item active" aria-current="page">Produtos</li>
		</ol>
	</nav>
<!-- 
	<div class="row text-left">
		<div class="col-sm-12 mb-2">
			<?= anchor('produto/cadastro', 'Novo Produto', array('class' => 'btn btn-success btn-sm')); ?>
		</div>
	</div> -->

	<div class="row">
		<div class="col-sm-12">
			<table class="table table-sm">
				<thead>
					<tr>
						<th> # </th>
						<th> Descrição </th>
						<th> Preço à vista </th>
						<th> Preço à prazo </th>
						<th> Status </th>
						<th> <?= anchor('produto/cadastro', 'NEW', array('class' => 'btn btn-success btn-sm float-right')); ?> </th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($produtos->result() as $produto): ?>
					<tr>
						<td> <?= $produto->id ?> </td>
						<td class="text-left"> <?= $produto->descricao ?> </td>
						<td class="text-right"> <?= $produto->preco_vista ?> </td>
						<td class="text-right"> <?= $produto->preco_prazo ?> </td>
						<td> <?= $produto->status ?> </td>
						<td class="text-right"> 
							<div class="btn-group">
							<?= anchor("produto/edita/$produto->id", '<i class="fas fa-edit"></i>', array('class' => 'btn btn-outline-info btn-sm')); ?> 
							<?= anchor("produto/remove/$produto->id", '<i class="fas fa-eraser"></i>', array('class' => 'btn btn-outline-danger btn-sm')); ?>
							</div>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>

			<h3><?= $produtos->num_rows(); ?> registro(s)</h3>
			<div class="row">
			</div>
		</div>
	</div>
</div>