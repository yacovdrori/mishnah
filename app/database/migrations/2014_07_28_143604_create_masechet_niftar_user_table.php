<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMasechetNiftarUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('masechet_niftar_user', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('masechet_id')->unsigned()->index();
			$table->foreign('masechet_id')->references('id')->on('masechets')->onDelete('cascade');
			$table->integer('niftar_user_id')->unsigned()->index();
			$table->foreign('niftar_user_id')->references('id')->on('niftar_user')->onDelete('cascade');
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
		Schema::drop('masechet_niftar_user');
	}

}
