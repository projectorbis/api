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
			$table->bigIncrements('id')->unsigned();
			$table->tinyInteger('par')->unsigned();
			$table->string('name', 100);
			$table->float('distance');
			$table->float('elevation');
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
