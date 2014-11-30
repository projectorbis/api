<?php

namespace Orbis\Models;

class Country extends BaseModel {

    protected $table = 'countries';

    protected $fillable = ['countryCode', 'countryName'];

}
