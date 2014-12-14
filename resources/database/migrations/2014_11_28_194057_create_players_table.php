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
            $table->string('nickname', 100)
                  ->nullable()
                  ->default(null);
            $table->enum('gender', array('M', 'F'));
            $table->date('birthdate');
            $table->smallInteger('countryId')
                  ->unsigned();
            $table->smallInteger('teamId')
                  ->unsigned()
                  ->nullable()
                  ->default(null);
            $table->smallInteger('federationId')
                  ->unsigned()
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
        Schema::drop('players');
    }
}
