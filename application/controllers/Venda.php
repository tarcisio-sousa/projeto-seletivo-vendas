<?php

class Venda extends MY_Controller
{
	
	function index()
	{
		$variaveis['vendas'] = $this->m_venda->get();
		$data['content'] = $this->load->view('venda_home', $variaveis, TRUE);
		$this->load->view('template', $data);
	}

	function cadastro()
	{
		$variaveis['usuario_id'] = $this->session->userdata('usuario_id');

		$variaveis['clientes'] = $this->m_cliente->get();
		$variaveis['produtos'] = $this->m_produto->get();
		$variaveis['formas_pagamento'] = $this->m_venda->FORMA_PAGAMENTO;

		$data['content'] = $this->load->view('venda_cadastro', $variaveis, TRUE);
		$this->load->view('template', $data);
	}

	function form()
	{
		// $regras = array(
		// 	array('field' => 'id_cliente', 'label' => 'Cliente', 'rules' => 'required'),
		// 	array('field' => 'id_produto', 'label' => 'Produto', 'rules' => 'required'),
		// 	array('field' => 'formas_pagamento', 'label' => 'Forma de Pagamento', 'rules' => 'required'),
		// 	array('field' => 'quantidade', 'label' => 'Quant.', 'rules' => 'required'),
		// 	array('field' => 'valor_total', 'label' => 'Valor Total', 'rules' => 'required'),
		// 	array('field' => 'usuario_id', 'label' => 'Usuário', 'rules' => 'required')
		// );

		$id = $this->input->post('id');

		$dados = array(
			"cliente_id" => $this->input->post("cliente_id"),
			"produto_id" => $this->input->post("produto_id"),
			"forma_pagamento" => $this->input->post("forma_pagamento"),
			"quantidade" => $this->input->post("quantidade"),
			"valor_total" => $this->input->post("valor_total"),
			"usuario_id" => $this->input->post("usuario_id")
		);

		// echo $this->input->get("id_cliente");
		// echo $this->input->get("id_produto");
		// echo $this->input->post("id_cliente");
		$this->m_venda->persiste($dados, $id);

		// if ($this->m_venda->persiste($dados, $id)) {
		// 	echo '{"id": "1"}';
		// } else {
		// 	echo '{"id": "+"}';
		// }

	}
}
?>