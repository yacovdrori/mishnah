<?php

class Friend extends Eloquent implements UserInterface, RemindableInterface {
	 /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	 
	protected $table = 'friends';

}