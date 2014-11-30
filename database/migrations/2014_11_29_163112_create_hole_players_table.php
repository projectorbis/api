<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHolePlayersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hole_players', function(Blueprint $table)
		{
			$table->bigIncrements('id')->unsigned();
			$table->bigInteger('holeId')->unsigned();
			$table->bigInteger('playerId')->unsigned();
			$table->tinyInteger('points')->unsigned();
			$table->boolean('ob')->unsigned();
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
		Schema::drop('hole_players');
	}
}
