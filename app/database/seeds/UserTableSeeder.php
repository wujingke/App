<?php

class UserTableSeeder extends Seeder {

	public function run()
	{
        DB::table('users')->delete();

		$users = array(
            array(
                'username' => 'Suzy',
                'email'    => 'suzy@me.io',
                'password' => Hash::make('password')
            ),
            array(
                'username' => 'Busker',
                'email'    => 'busker@me.io',
                'password' => Hash::make('password')
            ),
            array(
                'username' => 'Matz',
                'email'    => 'matz@me.io',
                'password' => Hash::make('password')
            ),

		);

		DB::table('users')->insert($users);
	}

}