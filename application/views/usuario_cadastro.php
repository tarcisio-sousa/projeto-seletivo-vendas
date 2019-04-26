<style type="text/css">
	p {
		margin: 0;
		text-align: left;
	}
</style>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<h3 class="text-left">
						Formulário de cadastro usuário
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
				<div class="col-md-4">
				</div>
				<div class="col-md-4">
					<!-- <form role="form"> -->
					<?= form_open('usuario/salvar') ?>
						<div class="form-group row text-left">
							 
							<label for="inputNome" class="col-sm-12 col-form-label">
								Nome
							</label>
							<div class="col-sm-12">
								<input type="text" name="nome" class="form-control" id="nome" value="<?= set_value('nome') ? : (isset($nome) ? $nome : '') ?>" autofocus='true' />
								<div role="alert"><?php echo form_error('nome') ?  : ''; ?></div>
							</div>
						</div>
						<div class="form-group row text-left">
							 
							<label for="inputMatricula" class="col-sm-12 col-form-label">
								Matrícula
							</label>
							<div class="col-sm-12">
								<input type="text" name="matricula" class="form-control" id="matricula" value="<?= set_value('matricula') ? : (isset($matricula) ? $matricula : '') ?>" />
								<div role="alert"><?php echo form_error('matricula') ?  : ''; ?></div>
							</div>
						</div>
						<div class="form-group row text-left">
							 
							<label for="inputPassword" class="col-sm-12 col-form-label">
								Senha
							</label>
							<div class="col-sm-12">
								<input type="password" name="senha" class="form-control" id="inputPassword" value="<?= set_value('senha') ? : (isset($senha) ? $senha : '') ?>" />
								<div role="alert"><?php echo form_error('senha') ?  : ''; ?></div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12"><input type='hidden' name="id" value="<?= set_value('id') ? : (isset($id) ? $id : ''); ?>"></div>
							<div class="col-sm-12 text-right">
								<button type="submit" class="btn btn-primary">
									Submit
								</button>
							</div>
						</div>
					<!-- </form> -->
					<?= form_close(); ?>
				</div>
				<div class="col-md-4">
				</div>
			</div>
		</div>
