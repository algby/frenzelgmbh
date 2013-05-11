<?php

class m130505_142609_alter_user extends \yii\db\Migration
{
	public function up()
	{
		$this->addColumn('tbl_user','prename','VARCHAR(255)');
	}

	public function down()
	{
		$this->dropColumn('tbl_user','prename');
	}
}
