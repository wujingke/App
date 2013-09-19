<?php

class TopicTableSeeder extends Seeder {

	public function run()
	{
        DB::table('topics')->delete();

		$topics = array(
            array(
                'title' => 'Suzy topic title',
                'content'    => 'suzy@me.io',
            ),
            array(
                'title' => 'Suzy topic title',
                'content'    => '这里是一个简单、温暖的小社区',
            ),
            array(
                'title' => 'Suzy topic title',
                'content'    => '这里是一个温暖的小社区',
            ),
		);

		DB::table('topics')->insert($topics);
	}

}