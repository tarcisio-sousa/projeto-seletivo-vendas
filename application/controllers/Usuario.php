<?php

class Usuario extends MY_Controller
{
	
	public function index()
	{
		$variaveis['usuarios'] = $this->m_usuario->get();
		$data['content'] = $this->load->view('usuario_home', $variaveis, TRUE);
		$this->load->view('template', $data);
	}

	public function cadastro()
	{
		$data['content'] = $this->load->view('usuario_cadastro', '', TRUE);
		$this->load->view('template', $data);
	}

	public function edita($id)
	{
		if ($id) {
			$usuario = $this->m_usuario->get($id);

			if ($usuario->num_rows() > 0) {
				$variaveis['id'] = $usuario->row()->id;
				$variaveis['nome'] = $usuario->row()->nome;
				$variaveis['matricula'] = $usuario->row()->matricula;
				$variaveis['status'] = $usuario->row()->status;

				$data['content'] = $this->load->view('usuario_cadastro', $variaveis, TRUE);
			} else {
				$variaveis['mensagem'] = "Registro não encontrado.";
				$this->load->view('errors/html/v_erro', $variaveis);
			}

		} else {
			$data['content'] = $this->load->view('usuario_cadastro', '', TRUE);
		}
		$this->load->view('template', $data);
	}

	public function salvar()
	{
		$this->load->library('form_validation');

		$regras = array(
			array('field' => 'nome', 'label' => 'Nome', 'rules' => 'required'),
			array('field' => 'matricula', 'label' => 'Matrícula', 'rules' => 'required'),
			array('field' => 'senha', 'label' => 'Senha', 'rules' => 'required')
		);

		$this->form_validation->set_rules($regras);

		if ($this->form_validation->run() == FALSE) {
			$data['content'] = $this->load->view('usuario_cadastro', '', TRUE);
			$this->load->view('template', $data);
		} else {
			
			$id = $this->input->post('id');
			
			$dados = array(

				"nome" => $this->input->post('nome'),
				"matricula" => $this->input->post('matricula'),
				"senha" => password_hash($this->input->post('senha'), PASSWORD_DEFAULT)
			);

			if ($this->m_usuario->persiste($dados, $id)) {
				$variaveis['mensagem'] = "Usuário cadastrado com sucesso!";

				$data['content'] = $this->load->view('usuario_cadastro_sucesso', $variaveis, TRUE);
				$this->load->view('template', $data);
			} else {
				$variaveis['mensagem'] = "Ocorreu um erro. Por favor, tente novamente";
				$this->load->view('errors/html/v_erro', $variaveis);
			}
		}
	}

	public function alterar_senha($id = null) {
		$this->load->library('form_validation');
		$regras = array(
			array('field' => 'matricula', 'label' => 'Matrícula', 'rules' => 'required'),
			array('field' => 'nsenha', 'label' => 'Nova Senha', 'rules' => 'required|alpha_numeric|min_length[6]'),
			array('field' => 'csenha', 'label' => 'Confirma Senha', 'rules' => 'required|matches[nsenha]')
		);
		$variaveis['id'] = $id;
		$this->form_validation->set_message('matches', 'A senha não corresponde.');
		$this->form_validation->set_rules($regras);
		
		if ($this->form_validation->run() && $id){
			$usuario = $this->m_usuario->get($id);
			if($usuario->num_rows() == 1) {
				$nova_senha = $this->input->post('nsenha');
				$dados = array('senha' => password_hash($nova_senha, PASSWORD_DEFAULT));
				if($this->m_usuario->persiste($dados, $id)){
					$variaveis['mensagem'] = "Senha alterada com sucesso!";
				}
			} else {
				$variaveis['mensagem'] = "Usuário não encontrado!";
			}
		}
		$data['content'] = $this->load->view('usuario_alterar_senha', $variaveis, TRUE);
		$this->load->view('template', $data);
	}

	public function remove($id = null) {
		if ($this->m_usuario->delete($id)) {
			redirect(base_url('usuario'));
			// $variaveis['mensagem'] = "Registro excluído com sucesso!";
			// $this->load->view('v_sucesso', $variaveis);
		}
	}
	/**
	 * public function superuser()
	 * {
	 * 	$this->load->view('superuser');
	 * }
	*/
}
?>