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
				Alterar senha
			</h3>

			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><?= anchor('/', 'Home', array()); ?></li>
					<li class="breadcrumb-item"><?= anchor('usuario', 'Usuários', array()); ?></li>
					<li class="breadcrumb-item active" aria-current="page">Alterar senha</li>
				</ol>
			</nav>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<?= isset($mensagem) ? $mensagem : "" ?>
		</div>
		<div class="col-md-4">
			<!-- <form role="form"> -->
			<?= form_open("usuario/alterar/senha/$id") ?>
				<div class="row">
					<div class="col-sm-12">
						<div class="form-group mb-2 text-left">
							 
							<label for="matricula"> Matrícula </label>
							<input type="text" name="matricula" class="form-control" id="matricula" value="<?= set_value('matricula') ? : (isset($matricula) ? $matricula : '') ?>" />
							
							<div class="col-sm-12 alert" role="alert"><?php echo form_error('matricula') ?  : ''; ?></div>
						</div>
					</div>
					<div class="col-sm-12">
						<div class="form-group mb-2 text-left">
							 
							<label for="password"> Nova Senha </label>
							<input type="password" name="nsenha" class="form-control" id="inputNewPassword" value="<?= set_value('nsenha') ? : (isset($nsenha) ? $nsenha : '') ?>" />
							
							<div class="col-sm-12 alert" role="alert"><?php echo form_error('nsenha') ?  : ''; ?></div>
						</div>
					</div>
					<div class="col-sm-12">
						<div class="form-group mb-2 text-left">
							 
							<label for="password"> Confirma Senha </label>
							<input type="password" name="csenha" class="form-control" id="inputConfirmPassword" value="<?= set_value('csenha') ? : (isset($csenha) ? $csenha : '') ?>" />
							
							<div class="col-sm-12 alert" role="alert"><?php echo form_error('csenha') ?  : ''; ?></div>
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
