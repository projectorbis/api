<?php

namespace Orbis\Models;

class Federation extends BaseModel {

    protected $table = 'federations';

    protected $fillable = [
        'name',
    ];

    public function players()
    {
        return $this->hasMany('Orbis\Models\Player', 'federationId');
    }
}
