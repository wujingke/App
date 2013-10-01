<?php

use Illuminate\Database\Migrations\Migration;

class CreateRepliesTable extends Migration {

	public function up()
	{
		Schema::create('replies', function($table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->integer('topic_id');
			$table->text('content');
			$table->text('content_html');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('replies');
	}

}