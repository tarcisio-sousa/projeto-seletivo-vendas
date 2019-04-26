<?php

/**
 * 
 */
class Usuario extends MY_Controller
{
	
	public function index()
	{
		$data['content'] = $this->load->view('usuario_home', '', TRUE);
		$this->load->view('template', $data);
	}

	public function cadastro()
	{
		$data['content'] = $this->load->view('usuario_cadastro', '', TRUE);
		$this->load->view('template', $data);
	}

	public function salvar()
	{
		$this->load->library('form_validation');

		$regras = array(
			array(
				'field' => 'nome',
				'label' => 'Nome',
				'rules' => 'required'
			),
			array(
				'field' => 'matricula',
				'label' => 'Matrícula',
				'rules' => 'required'
			),
			array(
				'field' => 'senha',
				'label' => 'Senha',
				'rules' => 'required'
			)
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
				$this->load->view('usuario_cadastro_sucesso', $variaveis);
			} else {
				$variaveis['mensagem'] = "Ocorreu um erro. Por favor, tente novamente";
				$this->load->view('errors/html/v_erro', $variaveis);
			}

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