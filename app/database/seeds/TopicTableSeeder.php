<?php

class TopicTableSeeder extends Seeder {

	public function run()
	{
        DB::table('topics')->delete();
        DB::table('replies')->delete();

		$topics = array(
            array(
                'user_id'    => 1,
                'node_id'    => 2,
                'title'      => 'Suzy Topic Title',
                'content'    => 'Suzy 说这里是一个温暖的小社区',
                'content_html' => '',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ),
		);

        $replies = array(
            array(
                'user_id'    => 1,
                'topic_id'   => 1,
                'content'    => 'Some Comment',
                'content_html' => '',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ),
        );

		//DB::table('topics')->insert($topics);
        //DB::table('replies')->insert($replies);
	}

}