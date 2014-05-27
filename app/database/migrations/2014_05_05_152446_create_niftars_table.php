<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNiftarsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Schema::create('niftars', function(Blueprint $table) {
			// $table->increments('id');
			// $table->string('firstname');
			// $table->string('lastname');
			// $table->unsignedInteger('user_id');
			// $table->foreign('user_id')->references('id')->on('users');
			// $table->string('image');
			// $table->date('death_date');
			// $table->text('description');
			// $table->date('birthdate');
			// $table->date('deathdate');
			// $table->text('fathersname');
			// $table->text('mothersname');
			// $table->text('city');
			// $table->text('state');
			// $table->timestamps();
		// });	

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//Schema::drop('niftars');
	}

}
