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

		$usuario = $this->m_usuario->verifica_usuario($matricula, $senha);

		if ($usuario > 0) {
			$this->session->set_userdata('logged', TRUE);
			redirect(base_url());
		} else {
			$variaveis['erro'] = "Matricula/senha inválidos!";
			$this->load->view('login', $variaveis);
		}
		
	}

	public function sair()
	{
		$this->session->unset_userdata('logged');
		redirect(base_url());
	}
}
?>