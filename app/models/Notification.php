<?php

class Notification extends Eloquent {

    public function user()
    {
        return $this->belongsTo('User');
    }

    public function scopeNewest($query)
    {
        return $query->where('user_id', '=', Auth::user()->id)
            ->orderBy('created_at', 'DESC')
            ->take(20);
    }
}
