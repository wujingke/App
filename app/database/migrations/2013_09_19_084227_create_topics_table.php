<?php

use Illuminate\Database\Migrations\Migration;

class CreateTopicsTable extends Migration {

	public function up()
	{
		Schema::create('topics', function($table)
		{
			$table->increments('id');
			$table->string('title');
			$table->string('content');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('topics');
	}

}