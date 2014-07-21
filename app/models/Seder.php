<?php

class Seder extends \Eloquent {
	protected $fillable = [];
		/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'seders';
	public  $timestamps = true;
	public function masechet()
	{
		return $this->hasMany('Masechet');
	}
}