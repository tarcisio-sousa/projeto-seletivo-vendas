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
				Cadastro de Cliente
			</h3>

			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><?= anchor('/', 'Home', array()); ?></li>
					<li class="breadcrumb-item"><?= anchor('cliente', 'Clientes', array()); ?></li>
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
			<?= form_open('cliente/salvar') ?>
				<div class="form-group text-left mb-2">
					 
					<label for="nome"> Nome </label>
					<input type="text" name="nome" class="form-control" id="nome" value="<?= set_value('nome') ? : (isset($nome) ? $nome : '') ?>" autofocus='true' />
					
					<div class="col-sm-12 alert" role="alert"><?php echo form_error('nome') ?  : ''; ?></div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group text-left mb-2">
							 
							<label for="cpf"> CPF </label>
							<input type="text" name="cpf" class="form-control" id="cpf" value="<?= set_value('cpf') ? : (isset($cpf) ? $cpf : '') ?>" autofocus='true' />
							<div class="alert" role="alert"><?php echo form_error('cpf') ?  : ''; ?></div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group text-left mb-2">
							 
							<label for="rg"> RG </label>
							<input type="text" name="rg" class="form-control" id="rg" value="<?= set_value('rg') ? : (isset($rg) ? $rg : '') ?>" autofocus='true' />
							<div class="col-sm-12 alert" role="alert"><?php echo form_error('rg') ?  : ''; ?></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-9">
						<div class="form-group text-left mb-2">
							 
							<label for="endereco"> Endereço </label>
							<input type="text" name="endereco" class="form-control" id="endereco" value="<?= set_value('endereco') ? : (isset($endereco) ? $endereco : '') ?>" autofocus='true' />
							
							<div class="col-sm-12 alert" role="alert"><?php echo form_error('endereco') ?  : ''; ?></div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="form-group text-left mb-2">
							 
							<label for="numero"> Número </label>
							<input type="text" name="numero" class="form-control" id="numero" value="<?= set_value('numero') ? : (isset($numero) ? $numero : '') ?>" autofocus='true' />
							<div class="col-sm-12 alert" role="alert"><?php echo form_error('numero') ?  : ''; ?></div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-7">
						<div class="form-group text-left mb-2">
							 
							<label for="cidade"> Cidade </label>
							<input type="text" name="cidade" class="form-control" id="cidade" value="<?= set_value('cidade') ? : (isset($cidade) ? $cidade : '') ?>" autofocus='true' />
							
							<div class="col-sm-12 alert" role="alert"><?php echo form_error('cidade') ?  : ''; ?></div>
						</div>
					</div>
					<div class="col-sm-5">
						<div class="form-group text-left mb-2">
							 
							<label for="estado"> Estado </label>
							<input type="text" name="estado" class="form-control" id="estado" value="<?= set_value('estado') ? : (isset($estado) ? $estado : '') ?>" autofocus='true' />
							<div class="col-sm-12 alert" role="alert"><?php echo form_error('estado') ?  : ''; ?></div>
						</div>
					</div>
				</div>
				<div class="form-group text-left mb-2">
					 
					<label for="renda"> Renda </label>
					<input type="text" name="renda" class="form-control text-right" id="renda" value="<?= set_value('renda') ? : (isset($renda) ? $renda : '') ?>" autofocus='true' />
					
					<div class="col-sm-12 alert" role="alert"><?php echo form_error('renda') ?  : ''; ?></div>
				</div>
				
				<div class="row">
					<div class="col-sm-12">
						<input type='hidden' name="id" value="<?= set_value('id') ? : (isset($id) ? $id : ''); ?>">
						<input type='hidden' name="usuario_id" value="<?= $usuario_id ?>">
					</div>
					<div class="col-sm-12 text-right">
						<button type="submit" class="btn btn-primary">
							Submit
						</button>
					</div>
				</div>
			<!-- </form> -->
			<?= form_close(); ?>
		</div>
	</div>
</div>
