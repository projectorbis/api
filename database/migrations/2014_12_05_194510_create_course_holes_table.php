<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseHolesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('course_holes', function(Blueprint $table)
		{
			$table->bigIncrements('id')
			     ->unsigned();
			$table->bigInteger('courseId')
			      ->unsigned();
			$table->bigInteger('holeId')
			      ->unsigned();
			$table->tinyInteger('idx')
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
		Schema::drop('course_holes');
	}

}
