<div class="col-sm-9">
	<!-- <div class="row text-left">
		<div class="col-sm-12">
			<h3>Lista de Usuários</h3>
		</div>
	</div> -->

	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><?= anchor('/', 'Home', array()); ?></li>
			<li class="breadcrumb-item active" aria-current="page">Usuários</li>
		</ol>
	</nav>

	<div class="row text-left"><!-- 
		<div class="col-sm-12 mb-2">
			<?= anchor('usuario/cadastro', 'NEW', array('class' => 'btn btn-success btn-sm')); ?>
		</div> -->
	</div>

	<div class="row">
		<div class="col-sm-12">
			<table class="table table-sm">
				<thead>
					<tr>
						<th> # </th>
						<th> Nome </th>
						<th> Matrícula </th>
						<th> Status </th>
						<th> <?= anchor('usuario/cadastro', 'NEW', array('class' => 'btn btn-success btn-sm float-right')); ?> </th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($usuarios->result() as $usuario): ?>
					<tr>
						<td> <?= $usuario->id ?> </td>
						<td class="text-left"> <?= $usuario->nome ?> </td>
						<td> <?= $usuario->matricula ?> </td>
						<td> <?= $usuario->status ?> </td>
						<td class="text-right"> 
							<div class="btn-group">
							<?= anchor("usuario/alterar/senha/$usuario->id", '<i class="fas fa-key"></i>', array('class' => 'btn btn-outline-info btn-sm')); ?> 
							<?= anchor("usuario/edita/$usuario->id", '<i class="fas fa-edit"></i>', array('class' => 'btn btn-outline-info btn-sm')); ?> 
							<?= anchor("usuario/remove/$usuario->id", '<i class="fas fa-eraser"></i>', array('class' => 'btn btn-outline-danger btn-sm')); ?>
							</div>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>

			<h3><?= $usuarios->num_rows(); ?> registro(s)</h3>
			<div class="row">
			</div>
		</div>
	</div>
</div>