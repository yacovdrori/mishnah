<?php

class Niftargroup extends Eloquent {
	protected $table = 'niftargroup';

	protected $fillable = [];

	public function niftar()
	{
		return $this->belongsToMany('Niftar','niftar_niftargroup','niftargroup_id', 'niftar_id');
	}


}