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
        return $this->belongs_to('User');
    }
	public static $rules = array('firstname' 	=> 'required|alpha' , 
					   'lastname'  	=> 'required|alpha',
					   'death_date' => 'date',
					   'birthdate'  => 'date'
		);
}