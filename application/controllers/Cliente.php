<?php

class Cliente extends MY_Controller
{
	
	public function index()
	{
		$variaveis['clientes'] = $this->m_cliente->get();
		$data['content'] = $this->load->view('cliente_home', $variaveis, TRUE);
		$this->load->view('template', $data);
	}

	public function cadastro()
	{
		$variaveis['usuario_id'] = $this->session->userdata('usuario_id');
		$data['content'] = $this->load->view('cliente_cadastro', $variaveis, TRUE);
		$this->load->view('template', $data);
	}

	public function edita($id)
	{
		if ($id) {
			$cliente = $this->m_cliente->get($id);

			if ($cliente->num_rows() > 0) {
				$variaveis['id'] = $cliente->row()->id;
				$variaveis['nome'] = $cliente->row()->nome;
				$variaveis['cpf'] = $cliente->row()->cpf;
				$variaveis['rg'] = $cliente->row()->rg;
				$variaveis['endereco'] = $cliente->row()->endereco;
				$variaveis['numero'] = $cliente->row()->numero;
				$variaveis['cidade'] = $cliente->row()->cidade;
				$variaveis['estado'] = $cliente->row()->estado;
				$variaveis['renda'] = $cliente->row()->renda;
				$variaveis['usuario_id'] = $cliente->row()->usuario_id;

				$data['content'] = $this->load->view('cliente_cadastro', $variaveis, TRUE);
			} else {
				$variaveis['mensagem'] = "Registro não encontrado.";
				$this->load->view('errors/html/v_erro', $variaveis);
			}

		} else {
			$data['content'] = $this->load->view('cliente_cadastro', '', TRUE);
		}
		$this->load->view('template', $data);
	}

	public function salvar()
	{
		$this->load->library('form_validation');

		$variaveis['usuario_id'] = $this->session->userdata('usuario_id');

		$regras = array(
			array('field' => 'nome', 'label' => 'Nome', 'rules' => 'required'),
			array('field' => 'cpf', 'label' => 'CPF', 'rules' => 'required'),
			array('field' => 'rg', 'label' => 'RG', 'rules' => 'required'),
			array('field' => 'endereco', 'label' => 'Endereço', 'rules' => 'required'),
			array('field' => 'numero', 'label' => 'Número', 'rules' => 'required'),
			array('field' => 'cidade', 'label' => 'Cidade', 'rules' => 'required'),
			array('field' => 'estado', 'label' => 'Estado', 'rules' => 'required'),
			array('field' => 'renda', 'label' => 'Renda', 'rules' => 'required'),
			array('field' => 'usuario_id', 'label' => 'Usuário', 'rules' => 'required')
		);

		$this->form_validation->set_rules($regras);

		if ($this->form_validation->run() == FALSE) {
			$data['content'] = $this->load->view('cliente_cadastro', $variaveis, TRUE);
			$this->load->view('template', $data);
		} else {
			
			$id = $this->input->post('id');
			
			$dados = array(
				"nome" => $this->input->post('nome'),
				"cpf" => $this->input->post('cpf'),
				"rg" => $this->input->post('rg'),
				"endereco" => $this->input->post('endereco'),
				"numero" => $this->input->post('numero'),
				"cidade" => $this->input->post('cidade'),
				"estado" => $this->input->post('estado'),
				"renda" => $this->input->post('renda'),
				"usuario_id" => $this->input->post('usuario_id')
			);

			if ($this->m_cliente->persiste($dados, $id)) {
				$variaveis['mensagem'] = "Cliente cadastrado com sucesso!";

				$data['content'] = $this->load->view('cliente_cadastro_sucesso', $variaveis, TRUE);
				$this->load->view('template', $data);
			} else {
				$variaveis['mensagem'] = "Ocorreu um erro. Por favor, tente novamente";
				$this->load->view('errors/html/v_erro', $variaveis);
			}
		}
	}

	public function remove($id = null) 
	{
		if ($this->m_cliente->delete($id)) {
			redirect(base_url('cliente'));
		}
	}

	public function get($id = null) {
		$cliente = $this->m_cliente->get_cliente($id);
		if($cliente->num_rows()){
			echo json_encode($cliente->row());
		} else {
			echo '{"id": "0"}';
		}
	}

	public function select($nome = null) {
		$cliente = $this->m_cliente->select_cliente($nome);
		if($cliente->num_rows()){
			// foreach ($cliente->result() as $value) {
			// }
			echo json_encode($cliente->result());
			// echo json_encode($cliente->row_array());
		} else {
			echo '{"id": "0"}';
		}
	}
}
?>