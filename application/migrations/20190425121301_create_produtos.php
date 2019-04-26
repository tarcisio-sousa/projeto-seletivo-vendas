<?php

class Migration_Create_Produtos extends CI_Migration
{
	
	public function up()
	{
		$produto = array(
			'id' => array(
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
				'auto_increment' => TRUE 
			),
			'descricao' => array(
				'type' => 'VARCHAR',
				'constraint' => 45
			),
			'detalhamento' => array(
				'type' => 'VARCHAR',
				'constraint' => 150
			),
			'preco_vista' => array(
				'type' => 'DOUBLE'
			),
			'preco_prazo' => array(
				'type' => 'DOUBLE'
			),
			'codigo_barras' => array(
				'type' => 'VARCHAR',
				'constraint' => 255
			),
			'usuario_id' => array(
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE
			),
			'created' => array(
				'type' => 'TIMESTAMP'
			),
			'status' => array(
				'type' => "ENUM('0', '1')",
				'default' => '1'
			)
		);

		$this->dbforge->add_field($produto);
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->add_key('usuario_id', FALSE);
		$this->dbforge->add_field('CONSTRAINT fk_prod_user_id FOREIGN KEY (usuario_id) REFERENCES usuarios(id)');
		$this->dbforge->create_table('produtos');
	}

	public function down()
	{
		$this->dbforge->drop_table('produtos');
	}
}
?>