<?php

class m130505_131012_users extends \yii\db\Migration
{
	public function up()
	{
		$this->createTable('tbl_user',array(
				'id'       => 'INTEGER UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY',
				'username' => 'VARCHAR(100) NOT NULL',
				'password' => 'VARCHAR(255) NOT NULL',
				'role'     => 'INTEGER UNSIGNED NOT NULL',
		),'CHARACTER SET utf8 COLLATE utf8_bin ENGINE = InnoDB;');
	}

	public function down()
	{
		$this->dropTable('tbl_user');
	}
}
