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
	
	public function verifica_usuario($matricula = null, $senha = null) 
	{
		$result = 0;

		if($matricula && $senha) {
			$result = $this->db->where(array('matricula' => $matricula, 'senha'=> $senha))->get('usuarios')->num_rows();
		}

		return $result; 
	}
}
?>