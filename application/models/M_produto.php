<?php

class M_produto extends CI_Model
{
	
	public function persiste($dados = null, $id = null)
	{
		if ($dados) {
			if ($id) {
				$this->db->where('id', $id);
				if ($this->db->update("produtos", $dados)) {
					return true;
				} else {
					return false;
				}
			} else {
				if ($this->db->insert("produtos", $dados)) {
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
		return $this->db->get('produtos');
	}

	public function get_produto($id = null)
	{
		return $this->db->where('id', $id)->get('produtos');
	}

	public function delete($id = null)
	{
		if ($id) {
			return $this->db->where('id', $id)->delete('produtos');
		}
	}
}
?>