<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseTeesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tees', function(Blueprint $table)
		{
			$table->bigIncrements('id')
			      ->unsigned();
			$table->bigInteger('holeId')
			      ->unsigned();
			$table->string('name', 100);
			$table->tinyInteger('par')
			      ->unsigned()
			      ->default(3);
			$table->float('distance', 5, 2)
			      ->nullable()
			      ->default(null);
			$table->float('relativeElevation', 6, 2)
			      ->nullable()
			      ->default(null);
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
		Schema::drop('tees');
	}

}
