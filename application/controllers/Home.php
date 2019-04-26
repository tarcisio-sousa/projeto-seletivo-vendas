<?php

class Home extends MY_Controller
{
	
	public function index()
	{
		$data['content'] = $this->load->view('home', '', TRUE);
		$this->load->view('template', $data);
	}
}

?>