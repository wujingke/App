<?php

use Illuminate\Database\Migrations\Migration;

class CreatePasswordRemindersTable extends Migration {

	public function up()
	{
		Schema::create('password_reminders', function($t)
		{
			$t->string('email');
			$t->string('token');
			$t->timestamp('created_at');
		});
	}

	public function down()
	{
		Schema::drop('password_reminders');
	}

}
