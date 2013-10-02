<?php

class NodeTableSeeder extends Seeder {

	public function run()
	{
        DB::table('nodes')->delete();

		$nodes = array(
            array(
                'name'       => '旅游',
                'pretty'     => 'travel',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ),
            array(
                'name'       => '美食',
                'pretty'     => 'food',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ),
            array(
                'name'       => '招聘',
                'pretty'     => 'jobs',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ),
		);

		DB::table('nodes')->insert($nodes);
	}

}