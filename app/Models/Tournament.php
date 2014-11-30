<?php

namespace Orbis\Models;

class Tournament extends BaseModel {

    protected $table = 'tournaments';

    protected $fillable = [
        'name',
        'date',
        'parentTournament',
    ];

    public function rounds()
    {
        return $this->belongsToMany('Orbis\Models\Round', 'tournament_rounds', 'tournamentId', 'roundId');
    }

    public function childTournaments()
    {
        return $this->hasMany('Orbis\Models\Tournament', 'parentTournament');
    }

    public function parentTournament()
    {
        return $this->belongsTo('Orbis\Models\Tournament', 'parentTournament', 'id');
    }
}
