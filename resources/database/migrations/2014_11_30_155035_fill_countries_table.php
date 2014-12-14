<?php

use Orbis\Models\Country;
use Illuminate\Database\Migrations\Migration;

class FillCountriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        foreach(json_decode(file_get_contents(__DIR__.'/data/countries.json'), true)['countries']['country'] as $country) {
            Country::create($country);
        }
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::table('countries')->delete();
	}

}
