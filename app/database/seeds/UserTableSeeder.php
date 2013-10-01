<?php

class UserTableSeeder extends Seeder {

	public function run()
	{
        DB::table('users')->delete();
        DB::table('profiles')->delete();

		$users = array(
            array(
                'username'   => 'Suzy',
                'email'      => 'suzy@me.io',
                'password'   => Hash::make('password'),
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ),
            array(
                'username'   => 'Busker',
                'email'      => 'busker@me.io',
                'password'   => Hash::make('password'),
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ),
            array(
                'username'   => 'Matz',
                'email'      => 'matz@me.io',
                'password'   => Hash::make('password'),
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ),

		);

        DB::table('users')->insert($users);
	}

}