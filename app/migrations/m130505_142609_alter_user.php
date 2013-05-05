<?php

class m130505_142609_alter_user extends \yii\db\Migration
{
	public function up()
	{
		$this->addColumn('tbl_user','password','string NOT NULL')->execute();
	}

	public function down()
	{
		$this->dropColumn('tbl_user','password')->execute();
	}
}
