<?php

class NodeTableSeeder extends Seeder {

	public function run()
	{
        DB::table('nodes')->delete();

		$nodes = array(
            array(
                'name'       => 'Ruby on Rails',
                'pretty'     => 'ruby-on-rails',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ),
            array(
                'name'       => 'Sinatra',
                'pretty'     => 'sinatra-framework',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ),
            array(
                'name'       => 'nodejs',
                'pretty'     => 'nodejs',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ),
		);

		DB::table('nodes')->insert($nodes);
	}

}