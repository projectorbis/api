<?php

namespace Orbis\Models;

class Round extends BaseModel {

    protected $table = 'rounds';

    protected $fillable = [
        'name',
        'time',
    ];

    public function tournaments()
    {
        return $this->belongsToMany('Orbis\Models\Tournament', 'tournament_rounds', 'roundId', 'tournamentId');
    }

    public function holes()
    {
        return $this->belongsToMany('Orbis\Models\Hole', 'round_holes', 'roundId', 'holeId');
    }

    public function players()
    {
        return $this->belongsToMany('Orbis\Models\Player', 'round_players', 'roundId', 'playerId');
    }
}
