<?php

use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration {

	public function up()
	{
		Schema::create('profiles', function($table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->string('nickname')->nullable();
			$table->string('location')->nullable();
			$table->string('website')->nullable();
			$table->string('company')->nullable();
			$table->string('avatar_url')->default('avatars/user.d.png');
			$table->string('contact_email')->nullable();
			$table->string('avatar_square_url')->default('avatars/user.d.s128.png');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('profiles');
	}
}
