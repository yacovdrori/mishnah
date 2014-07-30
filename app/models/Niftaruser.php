<?php


class Niftaruser extends Eloquent {
	protected $table = 'niftar_user';

	public function scopeUser($query, $id)
	{
		return $query->whereUser_id($id);
	}

	public function scopeNiftar($query,$id)
	{
		return $query->whereNiftar_id($id);
	}
	
	public function masechets() 
	{
		return $this->belongsToMany('Niftaruser', 'masechet_niftar_user', 'niftar_user_id', 'masechet_id')->withTimestamps();
	}
}