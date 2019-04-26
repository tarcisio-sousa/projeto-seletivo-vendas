<?php

class Login extends CI_Controller
{
	
	public function index()
	{

		$logged = $this->session->userdata("logged");

		if ($logged){
			redirect(base_url());
		}

		$this->load->view('login');
	}

	public function entrar() 
	{
		$matricula = $this->input->post('matricula');
		$senha = $this->input->post('senha');
		$variaveis = array();

		$usuario = $this->m_usuario->verifica_usuario($matricula);

		if ($usuario->num_rows() > 0){

			$hash = $usuario->row()->senha;

			if (password_verify($senha, $hash)){
				$this->session->set_userdata('logged', TRUE);
				$this->session->set_userdata('usuario_id', $usuario->row()->id);
				redirect(base_url());
			} else {
				$variaveis['erro'] = "Matricula / senha inválidos!";
			}

		} else {
			$variaveis['erro'] = "Matricula inválida!";
		}
		$this->load->view('login', $variaveis);
	}

	public function sair()
	{
		$this->session->unset_userdata('logged');
		$this->session->unset_userdata('usuario_id');
		redirect(base_url());
	}
}
?>