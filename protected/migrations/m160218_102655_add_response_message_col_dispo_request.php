<?php

class m160218_102655_add_response_message_col_dispo_request extends CDbMigration
{

	public function safeUp()
	{
		$this->addColumn("tbl_dispo_configuration", "response_message", "string");
	}

	public function safeDown()
	{
		$this->dropColumn("tbl_dispo_configuration", "response_message");
	}
}