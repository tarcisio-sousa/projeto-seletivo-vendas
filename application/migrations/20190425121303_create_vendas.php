<?php


class Migration_Create_Vendas extends CI_Migration
{
	
	public function up()
	{
		$venda = array(
			'id' => array('type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
				'auto_increment' => TRUE 
			),
			'produto_id' => array(
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE
			),
			'cliente_id' => array(
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE
			),
			'quantidade' => array(
				'type' => 'INT',
				'constraint' => 11
			),
			'forma_pagamento' => array(
				'type' => "ENUM('DINHEIRO', 'CARTÃO', 'CHEQUE', 'BOLETO')",
				'default' => 'DINHEIRO'
			),
			'data' => array(
				'type' => 'DATETIME'
			),
			'valor_total' => array(
				'type' => 'DOUBLE'
			),
			'usuario_id' => array(
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE
			),
			'created' => array(
				'type' => 'TIMESTAMP'
			),
			'updated' => array(
				'type' => 'DATETIME'
			),
			'status' => array(
				'type' => "ENUM('0', '1')",
				'default' => '1'
			)
		);

		$this->dbforge->add_field($venda);
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->add_key('produto_id', FALSE);
		$this->dbforge->add_field('CONSTRAINT fk_vnd_prod_id FOREIGN KEY (produto_id) REFERENCES produtos(id)');
		$this->dbforge->add_key('cliente_id', FALSE);
		$this->dbforge->add_field('CONSTRAINT fk_vnd_cli_id FOREIGN KEY (cliente_id) REFERENCES clientes(id)');
		$this->dbforge->add_key('usuario_id', FALSE);
		$this->dbforge->add_field('CONSTRAINT fk_vnd_user_id FOREIGN KEY (usuario_id) REFERENCES usuarios(id)');
		$this->dbforge->create_table('vendas');
	}

	public function down()
	{
		$this->dbforge->drop_table('vendas');
	}
}

?>