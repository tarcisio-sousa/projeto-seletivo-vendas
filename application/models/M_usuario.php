<?php

class M_usuario extends CI_Model
{
	
	public function persiste($dados = null, $id = null)
	{
		if ($dados) {
			if ($id) {
				$this->db->where('id', $id);
				if ($this->db->update("usuarios", $dados)) {
					return true;
				} else {
					return false;
				}
			} else {
				if ($this->db->insert("usuarios", $dados)) {
					return true;
				} else {
					return false;
				}
			}
		}
	}
	
	public function verifica_usuario($matricula = null) 
	{
		$result = null;

		if($matricula) {
			$result = $this->db->where(array('matricula' => $matricula))->get('usuarios');
		}

		return $result; 
	}
}
?>