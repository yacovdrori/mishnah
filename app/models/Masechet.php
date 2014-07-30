<?php

class Masechet extends Eloquent {
	protected $fillable = [];

	protected $table = 'masechets';
	public  $timestamps = true;

	public function seder()
	{
		return $this->belongsTo('Seder');
	}

	public function learner()
	{
		return $this->belongsToMany('Masechet','masechet_niftar_user','masechet_id','niftar_user_id');
	}
	// public function getSederNameAttribute()
	// {
	// 	return $this->Seder->name;
	// }
}