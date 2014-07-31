<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNiftarNiftargroupTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('niftar_niftargroup', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('niftar_id')->unsigned()->index();
			$table->foreign('niftar_id')->references('id')->on('niftars')->onDelete('cascade');
			$table->integer('niftargroup_id')->unsigned()->index();
			$table->foreign('niftargroup_id')->references('id')->on('niftargroup')->onDelete('cascade');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('niftar_niftargroup');
	}

}
