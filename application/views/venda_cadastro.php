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
				Pedido de Venda
			</h3>

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
		<div class="col-md-3">
		</div>
		<div class="col-md-6">
			<form onsubmit="return(false);" role="form">
			<? // form_open('venda/salvar') ?>
				<div class="form-group mb-2 text-left">
					 
					<div class="row">
						<div class="col-sm-2">
							<label for="id_cliente"> Cliente </label>
							<input type="text" name="id_cliente" id="id_cliente" class="form-control" />
						</div>
						<div class="col-sm-10">
							<label for="cliente"> Nome Cliente </label>
							<input type="text" name="nome_cliente" id="nome_cliente" class="form-control" />
							<!-- <select name="cliente_id" class="form-control" id="clientes">
								<option> - </option>
								<?php foreach($clientes->result() as $cliente): ?>
								<option value="<?= $cliente->id ?>"><?= $cliente->nome ?></option>
								<?php endforeach; ?>
							</select> -->
						</div>
						<div class="col-sm-12 alert" role="alert"><?php echo form_error('cliente') ?  : ''; ?></div>
					</div>
				</div>

				<div class="form-group mb-2 text-left">
					 
					<div class="row">
						<div class="col-sm-2">
							<label for="id_produto"> Produto </label>
							<input type="text" name="id_produto" id="id_produto" class="form-control" />
						</div>
						<div class="col-sm-10">
							<label for="produto"> Descrição Produto </label>
							<input type="text" name="descricao_produto" id="descricao_produto" class="form-control" />
						</div>
					</div>
					<div class="col-sm-12 alert" role="alert"><?php echo form_error('produto') ?  : ''; ?></div>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<div class="form-group mb-2 text-left">
							 
							<label for="forma_pagamento"> Pagamento </label>
							<select class="form-control" id="forma_pagamento">
							<?php foreach($formas_pagamento as $fpg): ?>
								<option value="<?= $fpg?>"><?= $fpg?></option>
							<?php endforeach; ?>
							</select>
							<div class="col-sm-12 alert" role="alert"><?php echo form_error('forma_pagamento') ?  : ''; ?></div>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="form-group mb-2 text-left">
							 
							<label for="quantidade"> Quant. </label>
							<input type="text" name="quantidade" class="form-control text-right" id="quantidade" value="<?= set_value('quantidade') ? : (isset($quantidade) ? $quantidade : '1') ?>" />
							<div class="col-sm-12 alert" role="alert"><?php echo form_error('quantidade') ?  : ''; ?></div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="form-group mb-2 text-left">
							 
							<label for="preco"> Preço </label>
							<input type="text" name="preco" class="form-control text-right" id="preco" value="<?= set_value('preco') ? : (isset($preco) ? $preco : '0.00') ?>" />
							<div class="col-sm-12 alert" role="alert"><?php echo form_error('preco') ?  : ''; ?></div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="form-group mb-2 text-left">
							 
							<label for="valor_total"> Total </label>
							<input type="text" name="valor_total" class="form-control text-right" id="valor_total" value="<?= set_value('valor_total') ? : (isset($valor_total) ? $valor_total : '0.00') ?>" />
							<div class="col-sm-12 alert" role="alert"><?php echo form_error('valor_total') ?  : ''; ?></div>
						</div>
					</div>
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
			</form>
			<? // form_close(); ?>
		</div>
	</div>
</div>
<script>
$(document).ready(function(){
	$("#id_cliente").blur(function(){
		$.getJSON("<?= base_url(); ?>cliente/get/" + $("#id_cliente").val(), function(result){
			if(result["id"] > 0) {
				$("#nome_cliente").val(result["nome"]);
			} else {
				$("#id_cliente").val("");
				$("#nome_cliente").val("");
			}
		});
	});

	$("#id_produto").blur(function(){
		$.getJSON("<?= base_url(); ?>produto/get/" + $("#id_produto").val(), function(result){
			if(result["id"] > 0){
				$("#descricao_produto").val(result["descricao"]);
				$("#forma_pagamento").val();
				var preco = "0.00";

				if($("#forma_pagamento").val() == "DINHEIRO"){
					preco = result["preco_vista"];
				} else {
					preco = result["preco_prazo"];
				}

				$("#forma_pagamento").change(function(){
					if($(this).val() == "DINHEIRO"){
						preco = result["preco_vista"];
					} else {
						preco = result["preco_prazo"];
					}
				});
				$("#preco").val(preco);
				var valor_total = $("#quantidade").val() * $("#preco").val();

				$("#valor_total").val(valor_total);

			} else {
				$("#id_produto").val("");
				$("#descricao_produto").val("");
				$("#preco").val("0.00");
				$("#valor_total").val("0.00");
				// alert("Produto não encontrado!");
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

	$("button").click(function(){
		alert("Submit");

		$.post("<?= base_url(); ?>venda/form",
			{
				cliente_id: 1,
				produto_id: 1,
				forma_pagamento: "DINHEIRO",
				quantidade: 2,
				valor_total: 2500,
				usuario_id: 4
			},
			function(data, status){
				alert("Data: " + data + "\nStatus: " + status);
			}
		);
	});
});
</script>
