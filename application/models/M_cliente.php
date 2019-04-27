<?php

class M_cliente extends CI_Model
{
	
	public function persiste($dados = null, $id = null)
	{
		if ($dados) {
			if ($id) {
				$this->db->where('id', $id);
				if ($this->db->update("clientes", $dados)) {
					return true;
				} else {
					return false;
				}
			} else {
				if ($this->db->insert("clientes", $dados)) {
					return true;
				} else {
					return false;
				}
			}
		}
	}

	public function get($id = null)
	{
		if ($id) {
			$this->db->where('id', $id);
		}
		return $this->db->get('clientes');
	}

	public function get_cliente($id = null)
	{
		return $this->db->where('id', $id)->get('clientes');
	}

	public function delete($id = null)
	{
		if ($id) {
			return $this->db->where('id', $id)->delete('clientes');
		}
	}
}
?>