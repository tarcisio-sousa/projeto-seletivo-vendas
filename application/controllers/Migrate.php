<?php

/**
 * 
 */
class Migrate extends CI_Controller
{
	
	function index()
	{
		$this->load->library('migration');

		if ($this->migration->current() === FALSE) {
			show_error($this->migration->error_string());
		}
	}
}

?>