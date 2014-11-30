<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoundPlayersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('round_players', function(Blueprint $table)
		{
			$table->bigIncrements('id')
			      ->unsigned();
			$table->bigInteger('roundId')
			      ->unsigned();
			$table->bigInteger('playerId')
			      ->unsigned();
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
		Schema::drop('round_players');
	}
}
