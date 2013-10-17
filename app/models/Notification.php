<?php

class Notification extends Eloquent {

    public function user()
    {
        return $this->belongsTo('User');
    }

    public function scopeNewest($query)
    {
        return $query->whereUser_id(Auth::user()->id)
            ->whereUnread(true)
            ->orderBy('created_at', 'DESC')
            ->take(20);
    }
}
