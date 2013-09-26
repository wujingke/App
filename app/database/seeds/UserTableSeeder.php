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

        $profiles = array(
            array('user_id' => 1),
            array('user_id' => 2),
            array('user_id' => 3),
        );

		DB::table('users')->insert($users);
        DB::table('profiles')->insert($profiles);
	}

}