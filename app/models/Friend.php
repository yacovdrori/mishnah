<?php


class Friend extends Eloquent {
	 /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	 
	protected $table = 'friends';
	public  $timestamps = true;
	public function niftar()
	{
		$this->belongs_to("Niftar");
	}

}