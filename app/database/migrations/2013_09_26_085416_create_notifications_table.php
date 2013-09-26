<?php

use Illuminate\Database\Migrations\Migration;

class CreateNotificationsTable extends Migration {

	public function up()
	{
		Schema::create('notifications', function($table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->text('content');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('notifications');
	}

}