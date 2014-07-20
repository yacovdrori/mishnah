<?php

class Masechet extends \Eloquent {
	protected $fillable = [];

	protected $table = 'masechets';
	public  $timestamps = true;

	public function seder()
	{
		$this->belongs_to('Seder');
	}

}