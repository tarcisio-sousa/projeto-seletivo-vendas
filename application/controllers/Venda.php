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
		$this->load->library('form_validation');

		$regras = array(
			array('field' => 'cliente_id', 'label' => 'Cliente', 'rules' => 'required'),
			array('field' => 'produto_id', 'label' => 'Produto', 'rules' => 'required'),
			array('field' => 'forma_pagamento', 'label' => 'Forma de Pagamento', 'rules' => 'required'),
			array('field' => 'quantidade', 'label' => 'Quant.', 'rules' => 'required'),
			array('field' => 'valor_total', 'label' => 'Valor Total', 'rules' => 'required'),
			array('field' => 'usuario_id', 'label' => 'Usuário', 'rules' => 'required')
		);

		$id = $this->input->post('id');

		$dados = array(
			"cliente_id" => $this->input->post("cliente"),
			"produto_id" => $this->input->post("produto"),
			"forma_pagamento" => $this->input->post("forma_pagamento"),
			"quantidade" => $this->input->post("quantidade"),
			"valor_total" => $this->input->post("valor_total"),
			"usuario_id" => $this->input->post("usuario")
		);

		
		$this->form_validation->set_rules($regras);

		$this->form_validation->set_data($dados);

		if ($this->form_validation->run() ==  FALSE) {
			// echo "ERROR!";
			$dados["validate"] = "** Preencha todos os campos corretamente. **";
			$dados["error"] = TRUE;
		} else {
			$result = $this->m_venda->persiste($dados, $id);
			$dados["validate"] = "Venda realizada com sucesso!";
			$dados["error"] = FALSE;
			// echo "OK!";
		}
		echo json_encode($dados);

	}

	public function remove($id = null) 
	{
		if ($this->m_venda->delete($id)) {
			redirect(base_url('venda'));
		}
	}
}
?>