<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameColumnIdMasechetsMasechetsMasechetsId extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('masechets', function($table)
		{
		    $table->renameColumn('id', 'masechet_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
Schema::table('masechets', function($table)
		{
		    $table->renameColumn('masechet_id', 'id');
		});
	}

}
