<?php

class Migration_Create_Usuario extends CI_Migration
{
	
	public function up()
	{
		$usuario =array(
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
			'matricula' => array(
				'type' => 'VARCHAR',
				'constraint' => 15
			),
			'senha' => array(
				'type' => 'VARCHAR',
				'constraint' => 30
			),
			'created' => array(
				'type' => 'TIMESTAMP'
			),
			'status' => array(
				'type' => "ENUM('0', '1')",
				'default' => '1'
			)
		);
		$this->dbforge->add_field($usuario);
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('usuarios');
	}

	public function down()
	{
		$this->dbforge->drop_table('usuarios');
	}
}
?>