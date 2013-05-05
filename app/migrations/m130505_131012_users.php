<?php

class m130505_131012_users extends \yii\db\Migration
{
	public function up()
	{
		$this->db->createCommand()->createTable('tbl_user', array(
            'id' => 'pk',
            'username' => 'string NOT NULL',
            'content' => 'text',
        ))->execute();
	}

	public function down()
	{
		$this->db->createCommand()->dropTable('tbl_user')->execute();
	}
}
