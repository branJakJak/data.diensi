<?php

class m160218_181117_create_new_cols extends CDbMigration
{
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
		$this->addColumn("tbl_dispo_configuration", "source", "string");
		$this->addColumn("tbl_dispo_configuration", "user", "string default 'apiuserwill' ");
		$this->addColumn("tbl_dispo_configuration", "pass", "string default 'mentalapipassword' ");
		$this->addColumn("tbl_dispo_configuration", "function", "string default 'add_lead' ");
		$this->addColumn("tbl_dispo_configuration", "phone_code", "string default '44' ");
		$this->addColumn("tbl_dispo_configuration", "dnc_check", "string default 'Y' ");
		$this->addColumn("tbl_dispo_configuration", "duplicate_check", "string default 'DUPLIVE' ");
		$this->addColumn("tbl_dispo_configuration", "add_to_hopper", "string default 'Y' ");
		$this->addColumn("tbl_dispo_configuration", "hopper_priority", "string default '45' ");
	}

	public function safeDown()
	{
		$this->dropColumn("tbl_dispo_configuration", "source");
		$this->dropColumn("tbl_dispo_configuration", "user");
		$this->dropColumn("tbl_dispo_configuration", "pass");
		$this->dropColumn("tbl_dispo_configuration", "function");
		$this->dropColumn("tbl_dispo_configuration", "phone_code");
		$this->dropColumn("tbl_dispo_configuration", "dnc_check");
		$this->dropColumn("tbl_dispo_configuration", "duplicate_check");
		$this->dropColumn("tbl_dispo_configuration", "add_to_hopper");
		$this->dropColumn("tbl_dispo_configuration", "hopper_priority");
	}
}