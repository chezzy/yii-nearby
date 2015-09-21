<?php

class m150921_133442_locations extends CDbMigration
{
	public function up()
	{
		return $this->createTable('locations', array(
			'id' => 'INTEGER PRIMARY KEY',
			'name' => 'TEXT',
			'lat' => 'TEXT',
			'long' => 'TEXT',
			'city' => 'TEXT',
			'state' => 'TEXT',
			'created' => 'INTEGER',
			'updated' => 'INTEGER'
		));
	}

	public function down()
	{
		return $this->dropTable('locations');
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}