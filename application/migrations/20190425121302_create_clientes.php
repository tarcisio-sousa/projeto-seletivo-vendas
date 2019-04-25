<?php


class Migration_Create_Clientes extends CI_Migration
{
	
	public function up()
	{
		$cliente = array(
			'id' => array(
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
				'auto_increment' => TRUE 
			),
			'nome' => array(
				'type' => 'VARCHAR',
				'constraint' => 150
			),
			'cpf' => array(
				'type' => 'VARCHAR',
				'constraint' => 15
			),
			'rg' => array(
				'type' => 'VARCHAR',
				'constraint' => 15
			),
			'endereco' => array(
				'type' => 'VARCHAR',
				'constraint' => 255
			),
			'numero' => array(
				'type' => 'INT',
				'constraint' => 11
			),
			'estado' => array(
				'type' => 'VARCHAR',
				'constraint' => 150
			),
			'cidade' => array(
				'type' => 'VARCHAR',
				'constraint' => 150
			),
			'renda' => array(
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
			'status' => array(
				'type' => "ENUM('0', '1')",
				'default' => '1'
			)
		);

		$this->dbforge->add_field($cliente);
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->add_key('usuario_id', FALSE);
		$this->dbforge->add_field('CONSTRAINT fk_cli_user_id FOREIGN KEY (usuario_id) REFERENCES usuarios(id)');
		$this->dbforge->create_table('clientes');
	}

	public function down()
	{
		$this->dbforge->drop_table('clientes');
	}
}

?>