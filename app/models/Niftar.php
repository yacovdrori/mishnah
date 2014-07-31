<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Niftar extends Eloquent {
		/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'niftars';
	public  $timestamps = true;
	
	public function user()
    {
        return $this->belongsTo('User');
    }

    	public function friend()
	{
		return $this->hasMany('Friend','niftarId','id');
	}

	public function learningforme()
	{
		return $this->belongsToMany('Niftar','niftar_user','niftar_id','user_id')->withTimestamps();
	}

	public function niftargroups()
	{
		return $this->belongsToMany('Niftargroup','niftar_niftargroup', 'niftar_id', 'nitargroup_id');
	}
	public static $rules = array('firstname' 	=> 'required' , 
					   'lastname'  	=> 'required|alpha',
					   'death_date' => 'date',
					   'birthdate'  => 'date'
		);
}