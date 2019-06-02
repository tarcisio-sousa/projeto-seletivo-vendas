<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="Tarcísio Sousa">
		<meta name="generator" content="">
		<title>Bem vindo! - Projeto Vendas</title>

		<!-- Bootstrap core CSS -->
		<?= link_tag('assets/bootstrap/css/bootstrap.min.css') ?>
		<?= link_tag('assets/js/angular-material.min.css') ?>
		<?= link_tag('assets/all.css') ?>
		<?= link_tag('assets/app.css') ?>
		<script src="<?= base_url(); ?>assets/js/angular.js"></script>
		<script src="<?= base_url(); ?>assets/js/angular-animate.min.js"></script>
		<script src="<?= base_url(); ?>assets/js/angular-aria.min.js"></script>
		<script src="<?= base_url(); ?>assets/js/angular-material.min.js"></script>
		<script src="<?= base_url(); ?>assets/js/app.js"></script>

	</head>
	<body class="text-center" ng-app="vendasApp" ng-cloak>
		
		<div layout="row" layout-sm="column" layout-margin style="padding: 0px; margin: 0px;" ng-show="loading">
	      <md-progress-linear style="margin: 0px;"></md-progress-linear>
	    </div>
		<div class="container">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<h3 class="text-left">Bem vindo!!!</h3>
				</div>
			</div>

			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item active" aria-current="page">Home</li>
				</ol>
			</nav>

			<div class="row" ng-controller="UsuarioCtrl">
				<div class="col-md-3">
					<ul class="nav flex-column nav-pills">
						<li class="nav-item">
							<!-- <a class="nav-link active" href="#">Home</a> -->
							<?= anchor('/', 'Home', array('class' => 'nav-link active')); ?>
						</li>
						<li class="nav-item">
							<a href="javascript: void(0);" class="nav-link" ng-click="showListUsuarios()">Usuários</a>
						</li>
						<li class="nav-item">
							<?= anchor('produto', 'Produtos', array('class' => 'nav-link')); ?>
						</li>
						<li class="nav-item">
							<?= anchor('cliente', 'Clientes', array('class' => 'nav-link')); ?>
						</li>
						<li class="nav-item">
							<?= anchor('venda', 'Vendas', array('class' => 'nav-link')); ?>
						</li>
						<li class="nav-item">
							<?= anchor('login/sair', 'Logout', array('class' => 'nav-link')); ?>
						</li>
					</ul>
				</div>
				<div class="col-md-9">
					<div class="container">
						
						<div class="listUsuarios" ng-show="listUsuarios">
							<table class="table table-sm">
								<thead>
									<tr>
										<th> # </th>
										<th> Nome </th>
										<th> Matrícula </th>
										<th> Status </th>
										<th>  </th>
									</tr>
								</thead>
								<tbody>
									<tr ng-repeat="(key, us) in usuarios">
										<td> {{ us.id }} </td>
										<td class="text-left"> {{ us.nome }} </td>
										<td> {{ us.matricula }} </td>
										<td> {{ us.status }} </td>
										<td class="text-right"> 
											<div class="btn-group">
											<md-button class="md-icon-button" ng-click="showAdvanced($event)" aria-label="Editar Senha"><i class="fas fa-key"></i></md-button>
											<md-button class="md-icon-button" aria-label="Editar Usuário"><i class="fas fa-edit"></i></md-button>
											<md-button class="md-icon-button" aria-label="Remover Usuário"><i class="fas fa-eraser"></i></md-button>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div style="visibility: hidden">
						    <div class="md-dialog-container" id="dialogEditUsuario">
						      
								<md-dialog aria-label="Editar Senha">
								  <form ng-cloak>
								    <md-toolbar>
								      <div class="md-toolbar-tools">
								        <h2>Editar Senha</h2>
								        <span flex></span>
								        <md-button class="md-icon-button" ng-click="cancel()">
								          <md-icon aria-label="Close dialog"><i class="fas fa-times-circle"></i></md-icon>
								        </md-button>
								      </div>
								    </md-toolbar>

								    <md-dialog-content>
								      <div class="md-dialog-content">
								      	<div class="row">
											<div class="col-sm-12">
												<div class="form-group mb-2 text-left">
													<label for="matricula"> Matrícula </label>
													<input type="text" name="matricula" class="form-control" id="matricula" value="" />
												</div>
												<div class="form-group mb-2 text-left">
													<label for="password"> Nova Senha </label>
													<input type="password" name="nsenha" class="form-control" id="inputNewPassword" value="" />
												</div>
												<div class="form-group mb-2 text-left">
													 
													<label for="password"> Confirma Senha </label>
													<input type="password" name="csenha" class="form-control" id="inputConfirmPassword" value="" />
												</div>
											</div>
										</div>
								      </div>
								    </md-dialog-content>

								    <md-dialog-actions layout="row">
								      <span flex></span>
								      <md-button ng-click="answer('not useful')">
								       Not Useful
								      </md-button>
								      <md-button ng-click="answer('useful')">
								        Useful
								      </md-button>
								    </md-dialog-actions>
								  </form>
								</md-dialog>


						    </div>
						  </div>
						<?//= $content ?>
					</div>

				</div>
			</div>
		</div>
		</div>
			
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<!-- 
		<script src="<?= base_url(); ?>assets/bootstrap/js/jquery.min.js"></script>

		<script src="<?= base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
		 -->

		<script src="<?= base_url(); ?>assets/all.js"></script>
		<!-- <script src="<?= base_url(); ?>assets/js/angular-resource.js"></script> -->
		<!-- <script src="<?= base_url(); ?>assets/js/angular-route.min.js"></script> -->
	</body>
	
</html>
