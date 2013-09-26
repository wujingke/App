<?php

use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration {

	public function up()
	{
		Schema::create('profiles', function($table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->string('nickname');
			$table->string('location');
			$table->string('website');
			$table->string('company');
			$table->string('avatar_url');
			$table->string('contact_email');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('profiles');
	}

}