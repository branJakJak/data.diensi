<?php

class m160219_133845_adjust_response_message_col extends CDbMigration
{
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
		$this->alterColumn("tbl_dispo_request", "response_message", "text");
	}

	public function safeDown()
	{
		$this->alterColumn("tbl_dispo_request", "response_message", "string");
	}
}