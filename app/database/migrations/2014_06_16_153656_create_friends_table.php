<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFriendsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('friends', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name')->nullable();
			$table->string('email');
			$table->integer('niftarId');
			$table->foreign('niftarId')->references('id')->on('niftars');
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
		Schema::drop('niftars', function (Blueprint $table)
		{
			$table->dropForeign('Friends');
		}
		
		);
		
	}

}
