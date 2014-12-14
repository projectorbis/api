<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenaltiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('penalties', function(Blueprint $table)
		{
			$table->bigIncrements('id')
			      ->unsigned();
			$table->bigInteger('playerId')
			      ->unsigned();
			$table->bigInteger('roundId')
			      ->unsigned();
			$table->tinyInteger('penalty')
			      ->unsigned()
			      ->default(0);
			$table->timestamp('createdAt');
			$table->timestamp('updatedAt');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('penalties');
	}

}
