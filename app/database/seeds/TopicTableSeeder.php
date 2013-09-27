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
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ),
            array(
                'user_id'    => 2,
                'node_id'    => 1,
                'title'      => 'Busker Topic Title',
                'content'    => 'Busker 说这里是一个温暖的小社区',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ),
            array(
                'user_id'    => 3,
                'node_id'    => 1,
                'title'      => 'Matz Topic Title',
                'content'    => 'Matz 说这里是一个温暖的小社区',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ),
            array(
                'user_id'    => 3,
                'node_id'    => 1,
                'title'      => 'Matz@2.0 Topic Title',
                'content'    => 'Matz@2.0 说这里是一个温暖的小社区',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ),
		);

        $replies = array(
            array(
                'user_id'    => 3,
                'topic_id'   => 1,
                'content'    => 'Some Comment',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ),
            array(
                'user_id'    => 3,
                'topic_id'   => 1,
                'content'    => 'Some Comment 1',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ),
            array(
                'user_id'    => 3,
                'topic_id'   => 1,
                'content'    => 'Some Comment 2',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ),
        );

		DB::table('topics')->insert($topics);
        DB::table('replies')->insert($replies);
	}

}