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
                'content'    => '这里是一个温小社区',
            ),
            array(
                'title' => 'Suzy topic title',
                'content'    => '这里是一个温暖的fg小社区',
            ),
            array(
                'title' => 'Suzy topic title',
                'content'    => '这里是一个温的小社区',
            ),
            array(
                'title' => 'Suzy topic title',
                'content'    => '这里是f一个温暖的s小社区',
            ),
            array(
                'title' => 'Suzy topic title',
                'content'    => '这里是f一个温暖s的s小社区',
            ),
            array(
                'title' => 'Suzy topic title',
                'content'    => '这里是f一个温a暖的小社区',
            ),
            array(
                'title' => 'Suzy topic title',
                'content'    => '这里是f一个温ssaf暖的小社区',
            ),
            array(
                'title' => 'Suzy topic title',
                'content'    => '这里是f一个温暖sf的小社区',
            ),
            array(
                'title' => 'Suzy topic title',
                'content'    => '这里是f一个温s暖sf的小社区',
            ),
            array(
                'title' => 'Suzy topic title',
                'content'    => '这里s是f一个温暖sf的小社区',
            ),
            array(
                'title' => 'Suzy topic title',
                'content'    => '这s里是f一个温暖sf的小社区',
            ),
            array(
                'title' => 'Suzy topic title',
                'content'    => '这里sdfs是f一个温暖sf的小社区',
            ),
            array(
                'title' => 'Suzy topic title',
                'content'    => '这a里sf是f一个温暖sf的小社区',
            ),
		);

		DB::table('topics')->insert($topics);
	}

}