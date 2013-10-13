<?php

class Node extends Eloquent {

    public function topics()
    {
        return $this->hasMany('Topic');
    }
}
