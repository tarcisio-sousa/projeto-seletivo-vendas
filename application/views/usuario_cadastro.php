<style type="text/css">
	.alert{
		margin: 0;
		padding: 0;
	}
	.alert p{
		margin: 5px 0;
		padding: 0;
	}
</style>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h3 class="text-left">
				Cadastro de Usuário
			</h3>

			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><?= anchor('/', 'Home', array()); ?></li>
					<li class="breadcrumb-item"><?= anchor('usuario', 'Usuários', array()); ?></li>
					<li class="breadcrumb-item active" aria-current="page">Cadastro</li>
				</ol>
			</nav>
		</div>
	</div>
	<div class="row">
		<div class="col-md-3">
		</div>
		<div class="col-md-6">
			<!-- <form role="form"> -->
			<?= form_open('usuario/salvar') ?>
				<div class="form-group mb-2 text-left">
					 
					<label for="nome"> Nome </label>
					<input type="text" name="nome" class="form-control" id="nome" value="<?= set_value('nome') ? : (isset($nome) ? $nome : '') ?>" autofocus='true' />
					
					<div class="col-sm-12 alert" role="alert"><?php echo form_error('nome') ?  : ''; ?></div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group mb-2 text-left">
							 
							<label for="matricula"> Matrícula </label>
							<input type="text" name="matricula" class="form-control" id="matricula" value="<?= set_value('matricula') ? : (isset($matricula) ? $matricula : '') ?>" />
							
							<div class="col-sm-12 alert" role="alert"><?php echo form_error('matricula') ?  : ''; ?></div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group mb-2 text-left">
							 
							<label for="password"> Senha </label>
							<input type="password" name="senha" class="form-control" id="inputPassword" value="<?= set_value('senha') ? : (isset($senha) ? $senha : '') ?>" />
							
							<div class="col-sm-12 alert" role="alert"><?php echo form_error('senha') ?  : ''; ?></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12"><input type='hidden' name="id" value="<?= set_value('id') ? : (isset($id) ? $id : ''); ?>"></div>
					<div class="col-sm-12 text-right">
						<button type="submit" class="btn btn-primary"> Submit </button>
					</div>
				</div>
			<!-- </form> -->
			<?= form_close(); ?>
		</div>
	</div>
</div>
