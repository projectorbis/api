<?php

namespace Orbis\Models;

class Player extends BaseModel {

    protected $table = 'players';

    protected $fillable = [
        'firstname',
        'lastname',
        'nickname',
        'gender',
        'birthdate',
        'countryId',
        'teamId',
        'federationId',
    ];

    public function country()
    {
        return $this->belongsTo('Orbis\Models\Country', 'countryId');
    }

    public function federation()
    {
        return $this->belongsTo('Orbis\Models\Federation', 'federationId');
    }
}
