<?php

namespace Orbis\Models;

class Hole extends BaseModel {

    protected $table = 'holes';

    protected $fillable = [
        'par',
        'name',
        'distance',
        'relativeElevation',
        'geoElevation',
        'geoLatitude',
        'geoLongitude',
    ];

    public function rounds()
    {
        return $this->belongsToMany('Orbis\Models\Hole', 'round_holes', 'holeId', 'roundId');
    }
}
