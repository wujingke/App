<?php

class TopicTableSeeder extends Seeder {

	public function run()
	{
        DB::table('topics')->delete();

		$topics = array(
            array(
                'user_id'    => 1,
                'title'      => 'Suzy Topic Title',
                'content'    => 'Suzy 说这里是一个温暖的小社区',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ),
            array(
                'user_id'    => 2,
                'title'      => 'Busker Topic Title',
                'content'    => 'Busker 说这里是一个温暖的小社区',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ),
            array(
                'user_id'    => 3,
                'title'      => 'Matz Topic Title',
                'content'    => 'Matz 说这里是一个温暖的小社区',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ),
            array(
                'user_id'    => 3,
                'title'      => 'Matz@2.0 Topic Title',
                'content'    => 'Matz@2.0 说这里是一个温暖的小社区',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ),
		);

		DB::table('topics')->insert($topics);
	}

}