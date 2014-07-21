<?php

class Masechet extends Eloquent {
	protected $fillable = [];

	protected $table = 'masechets';
	public  $timestamps = true;

	public function seder()
	{
		return $this->belongsTo('Seder');
	}
	// public function getSederNameAttribute()
	// {
	// 	return $this->Seder->name;
	// }
}