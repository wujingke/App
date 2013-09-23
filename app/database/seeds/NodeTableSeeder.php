<?php

class NodeTableSeeder extends Seeder {

	public function run()
	{
        DB::table('nodes')->delete();

		$nodes = array(
            array(
                'name' => 'Ruby on Rails',
                'pretty'    => 'ruby-on-rails',
            ),
            array(
                'name' => 'Sinatra',
                'pretty'    => 'sinatra-framework',
            ),
            array(
                'name' => 'nodejs',
                'pretty'    => 'nodejs',
            ),
		);

		DB::table('nodes')->insert($nodes);
	}

}