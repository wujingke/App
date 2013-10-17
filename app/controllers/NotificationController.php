<?php

class NotificationController extends BaseController {

    public function __construct()
    {
        $this->beforeFilter('auth');
    }

    public function index()
    {
        return View::make('notifications.index')
            ->with('notifications', Notification::newest()->paginate(12));
    }

    public function mark($id)
    {
        $notification = Notification::find($id);

        if ($notification && ($notification->user->id == Auth::user()->id)) {
            $notification->unread = false;
            $notification->save();
            return Response::json(array('success'=>true));
        }
        return Response::json(array('success'=>false));
    }

}