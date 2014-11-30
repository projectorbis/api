<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoundHolesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('round_holes', function(Blueprint $table)
        {
            $table->bigIncrements('id')
                  ->unsigned();
            $table->bigInteger('roundId')
                  ->unsigned();
            $table->bigInteger('holeId')
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
        Schema::drop('round_holes');
    }
}
