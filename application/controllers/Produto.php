<?php

class Produto extends MY_Controller
{
	
	public function index()
	{
		$variaveis['produtos'] = $this->m_produto->get();
		$data['content'] = $this->load->view('produto_home', $variaveis, TRUE);
		$this->load->view('template', $data);
	}

	public function cadastro()
	{
		$variaveis['usuario_id'] = $this->session->userdata('usuario_id');
		$data['content'] = $this->load->view('produto_cadastro', $variaveis, TRUE);
		$this->load->view('template', $data);
	}

	public function edita($id)
	{
		if ($id) {
			$produto = $this->m_produto->get($id);

			if ($produto->num_rows() > 0) {
				$variaveis['id'] = $produto->row()->id;
				$variaveis['descricao'] = $produto->row()->descricao;
				$variaveis['detalhamento'] = $produto->row()->detalhamento;
				$variaveis['preco_vista'] = $produto->row()->preco_vista;
				$variaveis['preco_prazo'] = $produto->row()->preco_prazo;
				$variaveis['codigo_barras'] = $produto->row()->codigo_barras;
				$variaveis['usuario_id'] = $produto->row()->usuario_id;

				$data['content'] = $this->load->view('produto_cadastro', $variaveis, TRUE);
			} else {
				$variaveis['mensagem'] = "Registro não encontrado.";
				$this->load->view('errors/html/v_erro', $variaveis);
			}

		} else {
			$data['content'] = $this->load->view('produto_cadastro', '', TRUE);
		}
		$this->load->view('template', $data);
	}

	public function salvar()
	{
		$this->load->library('form_validation');

		$variaveis['usuario_id'] = $this->session->userdata('usuario_id');

		$regras = array(
			array('field' => 'descricao', 'label' => 'Descrição', 'rules' => 'required'),
			array('field' => 'detalhamento', 'label' => 'Detalhamento', 'rules' => 'required'),
			array('field' => 'preco_vista', 'label' => 'Preço à vista', 'rules' => 'required'),
			array('field' => 'preco_prazo', 'label' => 'Preço à prazo', 'rules' => 'required'),
			array('field' => 'codigo_barras', 'label' => 'Código de barras', 'rules' => 'required'),
			array('field' => 'usuario_id', 'label' => 'Usuário', 'rules' => 'required')
		);

		$this->form_validation->set_rules($regras);

		if ($this->form_validation->run() == FALSE) {
			$data['content'] = $this->load->view('produto_cadastro', $variaveis, TRUE);
			$this->load->view('template', $data);
		} else {
			
			$id = $this->input->post('id');
			
			$dados = array(
				"descricao" => $this->input->post('descricao'),
				"detalhamento" => $this->input->post('detalhamento'),
				"preco_vista" => $this->input->post('preco_vista'),
				"preco_prazo" => $this->input->post('preco_prazo'),
				"codigo_barras" => $this->input->post('codigo_barras'),
				"usuario_id" => $this->input->post('usuario_id')
			);

			if ($this->m_produto->persiste($dados, $id)) {
				$variaveis['mensagem'] = "Produto cadastrado com sucesso!";

				$data['content'] = $this->load->view('produto_cadastro_sucesso', $variaveis, TRUE);
				$this->load->view('template', $data);
			} else {
				$variaveis['mensagem'] = "Ocorreu um erro. Por favor, tente novamente";
				$this->load->view('errors/html/v_erro', $variaveis);
			}
		}
	}

	public function remove($id = null) 
	{
		if ($this->m_produto->delete($id)) {
			redirect(base_url('produto'));
		}
	}

	public function get($id = null) {
		$produto = $this->m_produto->get_produto($id);
		if($produto->num_rows()){
			echo json_encode($produto->row());
		} else {
			echo '{"id": "0"}';
		}
	}
}
?>