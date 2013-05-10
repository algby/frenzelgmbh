<?php

class m130510_163333_messaging extends \yii\db\Migration
{
	public function up()
	{
		$this->createTable('tbl_messages',array(
				'id'                        => 'INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT',
				'sender_id'                 => 'INTEGER DEFAULT 0',
				'reciever_id'               => 'INTEGER DEFAULT 0',
				'subject'					=> 'VARCHAR(255) NOT NULL DEFAULT ""',
				'body'						=> 'TEXT',
				'is_read'					=> 'TINYINT(1) NOT NULL DEFAULT 0',
				'deleted_by'				=> 'TINYINT(1) DEFAULT NULL',			
				'creation_date'             => 'DATETIME NOT NULL',				
		));
	}

	public function down()
	{
		$this->dropTable('tbl_messages');
	}
}
