<?php

class Masechetniftaruser extends Eloquent {
	protected $fillable = [];

	protected $table = 'masechet_niftar_user';
	public  $timestamps = true;

	public function scopeNiftaruser($query,$id){
		return $query->whereNiftar_user_id($id);
	}

	public function scopeNiftar($query,$id){
		return DB::table('masechet_niftar_user')->whereIn('niftar_user_id',Niftaruser::niftar($id)->lists('user_id'))->get();
	}

	public function niftarusers()
	{
		return $this->belongsTo('Niftaruser','niftar_user_id','id');
	}
}