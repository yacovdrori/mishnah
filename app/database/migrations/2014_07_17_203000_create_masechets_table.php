<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMasechetsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('masechets', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->integer('size');
			$table->integer('seder_id');
			$table->foreign('seder_id')->references('id')->on('seders');
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
		Schema::drop('masechets');
	}

}
