
<div class="col-sm-9">
	<div class="row">
		<div class="col-md-12">
			<!-- <h3 class="text-left">
				Pedido de Venda
			</h3> -->

			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><?= anchor('/', 'Home', array()); ?></li>
					<li class="breadcrumb-item"><?= anchor('venda', 'Pedidos de Venda', array()); ?></li>
					<li class="breadcrumb-item active" aria-current="page">Cadastro</li>
				</ol>
			</nav>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8 mx-auto">
		<div class="alert validate mt-0 pt-1 pb-1" style="display: none;" role="alert"></div>
			<form onsubmit="return(false);" role="form" id="formVenda">
			<? // form_open('venda/salvar') ?>
				<div class="form-group mb-2 text-left">
					 
					<div class="row">
						<div class="col-sm-3">
							<label for="cliente"> Cliente </label>
							<div class="input-group">
								<input type="text" name="cliente" value="<?= set_value('cliente_id') ? : (isset($cliente_id) ? $cliente_id : ''); ?>" id="cliente" class="form-control" autofocus="true" />
								<div class="input-group-append">
									<a class="btn btn-outline-secondary modalCliente" href="#" data-toggle="modal" data-target="#clienteModal">
									  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-0" role="img" viewBox="0 0 24 24" focusable="false"><circle cx="10.5" cy="10.5" r="7.5"></circle><path d="M21 21l-5.2-5.2"></path></svg>
									</a>
								</div>
							</div>
						</div>
						<div class="col-sm-9">
							<label for="cliente"> Nome Cliente </label>
							<input type="text" name="nome_cliente" value="<?= set_value('nome_cliente') ? : (isset($nome_cliente) ? $nome_cliente : ''); ?>" id="nome_cliente" class="form-control" />
						</div>
						<div><?php echo form_error('cliente') ?  : ''; ?></div>
					</div>
				</div>

				<div class="form-group mb-2 text-left">
					 
					<div class="row">
						<div class="col-sm-3">
								<label for="produto"> Produto </label>
								<div class="input-group">
									<input type="text" name="produto" value="<?= set_value('produto_id') ? : (isset($produto_id) ? $produto_id : ''); ?>" id="produto" class="form-control" />
									<div class="input-group-append">
										<a class="btn btn-outline-secondary modalProduto" href="#" data-toggle="modal" data-target="#produtoModal">
										  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-0" role="img" viewBox="0 0 24 24" focusable="false"><circle cx="10.5" cy="10.5" r="7.5"></circle><path d="M21 21l-5.2-5.2"></path></svg>
										</a>
									</div>
								</div>
						</div>
						<div class="col-sm-9">
							<label for="produto"> Descrição Produto </label>
							<input type="text" name="descricao_produto" value="<?= set_value('descricao_produto') ? : (isset($descricao_produto) ? $descricao_produto : ''); ?>" id="descricao_produto" class="form-control" />
						</div>
					</div>
					<div><?php echo form_error('produto') ?  : ''; ?></div>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<div class="form-group mb-2 text-left">
							 
							<label for="forma_pagamento"> Pagamento </label>
							<select class="form-control custom-select d-block w-100" id="forma_pagamento">
							<?php foreach($formas_pagamento as $fpg): ?>
								<option value="<?= $fpg?>" <?= (isset($forma_pagamento) && $forma_pagamento == $fpg ? "selected=selected" : "")?>><?= $fpg?></option>
							<?php endforeach; ?>
							</select>
							<div><?php echo form_error('forma_pagamento') ?  : ''; ?></div>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="form-group mb-2 text-left">
							 
							<label for="quantidade"> Quant. </label>
							<input type="text" name="quantidade" class="form-control text-right" id="quantidade" value="<?= set_value('quantidade') ? : (isset($quantidade) ? $quantidade : '1') ?>" />
							<div><?php echo form_error('quantidade') ?  : ''; ?></div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="form-group mb-2 text-left">
							 
							<label for="preco"> Preço </label>
							<input type="text" name="preco" class="form-control text-right" id="preco" value="<?= set_value('preco') ? : (isset($preco) ? $preco : '0.00') ?>" />
							<div><?php echo form_error('preco') ?  : ''; ?></div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="form-group mb-2 text-left">
							 
							<label for="valor_total"> Total </label>
							<input type="text" name="valor_total" class="form-control text-right" id="valor_total" value="<?= set_value('valor_total') ? : (isset($valor_total) ? $valor_total : '0.00') ?>" />
							<div><?php echo form_error('valor_total') ?  : ''; ?></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<input type='hidden' name="id" id="id" value="<?= set_value('id') ? : (isset($id) ? $id : ''); ?>">
						<input type='hidden' name="usuario" id="usuario" value="<?= $usuario_id ?>">
					</div>
					<div class="col-sm-12 text-right">
						<button type="submit" id="submit" class="btn btn-primary">
							Submit
						</button>
					</div>
				</div>
			</form>

			<? // form_close(); ?>
		</div>
	</div>
</div>


<div class="modal fade" id="clienteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalCenterTitle">Selecionar Cliente</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-search mt-3 ml-3 mb-0 mr-3">
				<div class="input-group">
					<input type="text" name="select_cliente" id="select_cliente" class="form-control">
					<div class="input-group-append">
						<button type="button" id="button_select_cliente" class="btn btn-primary"> <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-0" role="img" viewBox="0 0 24 24" focusable="false"><circle cx="10.5" cy="10.5" r="7.5"></circle><path d="M21 21l-5.2-5.2"></path></svg> </button>
					</div>
				</div>

			</div>
			<div class="modal-body">

				<div id="result_select_cliente">
					<table class="table table-sm" style="display: none;">
						<thead>
							<tr>
								<th>Nome</th>
								<th>CPF</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="produtoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalCenterTitle">Selecionar Produto</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-search mt-3 ml-3 mb-0 mr-3">
				<div class="input-group">
					<input type="text" name="select_produto" id="select_produto" class="form-control">
					<div class="input-group-append">
						<button type="button" id="button_select_produto" class="btn btn-primary"> <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-0" role="img" viewBox="0 0 24 24" focusable="false"><circle cx="10.5" cy="10.5" r="7.5"></circle><path d="M21 21l-5.2-5.2"></path></svg> </button>
					</div>
				</div>

			</div>
			<div class="modal-body">

				<div id="result_select_produto">
					<table class="table table-sm" style="display: none;">
						<thead>
							<tr>
								<th>Descrição</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
$(document).ready(function(){

	$("#button_select_cliente").click(function(){

		$.getJSON("<?= base_url(); ?>cliente/select/" + $("#select_cliente").val(), function(result){

			$("#result_select_cliente table tbody").text("");
			$.each(result, function(i, field){
				if(!result["id"]){
			    	$("#result_select_cliente table tbody").append("<tr><td class='text-left'>" + field["nome"] + "</td><td>" + field["cpf"] + "</td><td class='text-right'><a href='#' class='btn btn-secondary btn-sm select_cliente_button' data-id='"+ field["id"] +"'>selecione</a></td></tr>");
			    	$("#result_select_cliente table").show();
				} else {
			    	$("#result_select_cliente table").hide();
				}
		    });

			$(".select_cliente_button").click(function(){

				$("#cliente").val($(this).data("id")).focus();

				$("#clienteModal").modal("hide");
			});
		});
	});


	$("#cliente").blur(function(){

		$.getJSON("<?= base_url(); ?>cliente/get/" + $("#cliente").val(), function(result){
			if(result["id"] > 0) {
				$("#nome_cliente").val(result["nome"]);
			} else {
				$("#cliente").val("");
				$("#nome_cliente").val("");
			}
		});
	});



	$("#button_select_produto").click(function(){

		$.getJSON("<?= base_url(); ?>produto/select/" + $("#select_produto").val(), function(result){

			$("#result_select_produto table tbody").text("");
			$.each(result, function(i, field){
				if(!result["id"]){
			    	$("#result_select_produto table tbody").append("<tr><td class='text-left'>" + field["descricao"] + "</td><td class='text-right'><a href='#' class='btn btn-secondary btn-sm select_produto_button' data-id='"+ field["id"] +"'>selecione</a></td></tr>");
			    	$("#result_select_produto table").show();
				} else {
			    	$("#result_select_produto table").hide();
				}
		    });

			$(".select_produto_button").click(function(){

				$("#produto").val($(this).data("id")).focus();

				$("#produtoModal").modal("hide");
			});
		});
	});

	$("#produto").blur(function(){
		$.getJSON("<?= base_url(); ?>produto/get/" + $("#produto").val(), function(result){
			if(result["id"] > 0){
				$("#descricao_produto").val(result["descricao"]);
				$("#forma_pagamento").val();
				var preco = "0.00";

				if($("#forma_pagamento").val() == "DINHEIRO"){
					preco = result["preco_vista"];
				} else {
					preco = result["preco_prazo"];
				}
				$("#preco").val(preco);

				var valor_total = $("#quantidade").val() * $("#preco").val();
				$("#valor_total").val(valor_total);


				$("#forma_pagamento").change(function(){
					if($(this).val() == "DINHEIRO"){
						preco = result["preco_vista"];
					} else {
						preco = result["preco_prazo"];
					}
					$("#preco").val(preco);

					var valor_total = $("#quantidade").val() * $("#preco").val();
					$("#valor_total").val(valor_total);
				});

			} else {
				$("#produto").val("");
				$("#descricao_produto").val("");
				$("#quantidade").val("1");
				$("#preco").val("0.00");
				$("#valor_total").val("0.00");
			}

		});
	});

	$("#quantidade").blur(function(){
		var quantidade = $("#quantidade").val();
		var preco = $("#preco").val();
		var valor_total =  quantidade * preco;

		if(valor_total > 0){
			$("#valor_total").val(valor_total);
		} else {
			$("#valor_total").val("0.00");
		}
	});

	$("#submit").click(function(){

		$.post("<?= base_url(); ?>venda/form",
			{
				id: $("#id").val(),
				cliente: $("#cliente").val(),
				produto: $("#produto").val(),
				forma_pagamento: $("#forma_pagamento").val(),
				quantidade: $("#quantidade").val(),
				valor_total: $("#valor_total").val(),
				usuario: $("#usuario").val()
			},
			function(data, status){
				$(".alert").show(0, "swing", function(){
					$(this).text(data["validate"]);
					if(!data['error']){
						$("#id").val("");
						$("#produto").val("");
						$("#descricao_produto").val("");
						$("#cliente").val("");
						$("#nome_cliente").val("");
						$("#forma_pagamento").val("DINHEIRO");
						$("#quantidade").val("1");
						$("#preco").val("0.00");
						$("#valor_total").val("0.00");
						$(this).removeClass("alert-warning");
						$(this).addClass("alert-success");
					} else {
						$(this).removeClass("alert-success");
						$(this).addClass("alert-warning");
					}
				});

			},
			"json"
		);
	});

	// $(".modalCliente").
});
</script>
