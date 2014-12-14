<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHolesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('holes', function(Blueprint $table)
		{
			$table->bigIncrements('id')
			      ->unsigned();
			$table->bigInteger('parkId')
			      ->unsigned();
			$table->string('name', 100);
			$table->float('geoElevation', 6, 2)
				  ->nullable()
				  ->default(null);
			$table->float('geoLatitude', 8, 6)
				  ->nullable()
				  ->default(null);
			$table->float('geoLongitude', 9, 6)
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
		Schema::drop('holes');
	}
}
