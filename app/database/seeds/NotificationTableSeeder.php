<?php

class NotificationTableSeeder extends Seeder {

	public function run()
	{
        DB::table('notifications')->delete();

		$notifications = array(
            array(
                'user_id'         => 1,
                'content'         => 'System Notification.',
                'unread'          => true,
                'created_at'      => new DateTime,
                'updated_at'      => new DateTime,
            ),
            array(
                'user_id'         => 1,
                'unread'          => true,
                'content'         => '<a data-username>Username</a>@you when reply <a data-topic-id>Topic</a> <p>Reply Content.</p>',
                'created_at'      => new DateTime,
                'updated_at'      => new DateTime,
            ),
            array(
                'user_id'         => 1,
                'unread'          => true,
                'content'         => '<a data-username>Username</a>Reply your <a data-topic-id>Topic</a> <p>Reply Content.</p>',
                'created_at'      => new DateTime,
                'updated_at'      => new DateTime,
            ),
            array(
                'user_id'         => 1,
                'unread'          => true,
                'content'         => '<a data-username>Username</a>Reply the <a data-topic-id>Topic</a> you watched <p>Reply Content.</p>',
                'created_at'      => new DateTime,
                'updated_at'      => new DateTime,
            ),
		);

		DB::table('notifications')->insert($notifications);
	}

}