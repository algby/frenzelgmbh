<?php

class m130505_131012_users extends \yii\db\Migration
{
	public function up()
	{
		$this->createTable('tbl_user',array(
            'id' => 'PK',
            'username' => 'STRING NOT NULL',
            'content' => 'TEXT',
        ));
	}

	public function down()
	{
		$this->dropTable('tbl_user');
	}
}
