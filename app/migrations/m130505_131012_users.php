<?php

class m130505_131012_users extends \yii\db\Migration
{
	public function up()
	{
		$this->createTable('tbl_user',array(
				'id'       => 'INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT',
				'username' => 'VARCHAR(100) NOT NULL',
				'password' => 'VARCHAR(255) NOT NULL',
				'email'	   => 'VARCHAR(255) NOT NULL',
				'role'     => 'INTEGER UNSIGNED NOT NULL DEFAULT 1',
		));
	}

	public function down()
	{
		$this->dropTable('tbl_user');
	}
}
