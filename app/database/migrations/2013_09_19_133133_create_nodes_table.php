<?php

use Illuminate\Database\Migrations\Migration;

class CreateNodesTable extends Migration {

	public function up()
	{
		Schema::create('nodes', function($table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('pretty');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('nodes');
	}
}
