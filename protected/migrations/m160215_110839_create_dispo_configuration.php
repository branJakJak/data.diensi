<?php

class m160215_110839_create_dispo_configuration extends CDbMigration
{

	public function safeUp()
	{
		$this->createTable("tbl_dispo_configuration",array(
				'id'=>'pk',
				'dispo_name'=>'string not null',
				'server_ip'=>'string not null',
				'list_id'=>'string not null',
			));
		$this->createTable("tbl_dispo_request",array(
				"id"=>"pk",
				"dispo_conf_id"=>"integer",
				"mobile_number"=>"string not null",
				"request_parameters"=>"text",
				"request_from"=>"string",//ip address of requestor
				"date_submitted"=>"datetime",
			));
		$this->addForeignKey("tbl_dispo_request_fk", "tbl_dispo_request", "dispo_conf_id", "tbl_dispo_configuration", "id", "CASCADE", "CASCADE");
	}

	public function safeDown()
	{
		$this->dropForeignKey("tbl_dispo_request_fk","tbl_dispo_request");
		$this->dropTable("tbl_dispo_configuration");
		$this->dropTable("tbl_dispo_request");
	}

}