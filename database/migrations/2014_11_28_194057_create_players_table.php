<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('players', function(Blueprint $table)
		{
			$table->bigIncrements('id')->unsigned();
			$table->string('firstname', 100);
			$table->string('lastname', 100);
			$table->string('nickname', 100);
			$table->enum('choices', array('M', 'F'));
			$table->date('birthdate');
			$table->smallInteger('countryId')->unsigned();
			$table->smallInteger('teamId')->unsigned();
			$table->smallInteger('federationId')->unsigned();
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
		Schema::drop('players');
	}
}
