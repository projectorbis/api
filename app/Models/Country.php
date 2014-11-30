<?php

namespace Orbis\Models;

class Country extends BaseModel {

    protected $table = 'countries';

    protected $fillable = [
        'countryCode',
        'countryName',
    ];

    public function players()
    {
        return $this->hasMany('Orbis\Models\Player', 'countryId');
    }
}
