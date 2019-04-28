<?php

class M_venda extends CI_Model
{

	public $FORMA_PAGAMENTO = array('DINHEIRO', 'CARTÃO', 'CHEQUE', 'BOLETO');

	public function persiste($dados = null, $id = null)
	{
		if ($dados) {
			if ($id) {
				$this->db->where('id', $id);
				if ($this->db->update("vendas", $dados)) {
					return true;
				} else {
					return false;
				}
				echo "pass";
			} else {
				if ($this->db->insert("vendas", $dados)) {
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
		return $this->db->get('vendas');
	}

	public function delete($id = null)
	{
		if ($id) {
			return $this->db->where('id', $id)->delete('vendas');
		}
	}
}
?>