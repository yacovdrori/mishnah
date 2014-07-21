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

	public static $rules = array('firstname' 	=> 'required|alpha' , 
					   'lastname'  	=> 'required|alpha',
					   'death_date' => 'date',
					   'birthdate'  => 'date'
		);
}