<?php

class Car extends \Eloquent {
	protected $fillable = [];

    public function Factory(){
        return $this->belongsTo('Factory', 'factory_id');
    }

    public function Karkhane(){
        return $this->belongsTo('Karkhane');
    }
}