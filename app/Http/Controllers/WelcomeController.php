<?php

namespace Orbis\Http\Controllers;

use Orbis\Models\Round;
use Orbis\Models\Country;
use Orbis\Models\Tournament;

class WelcomeController extends Controller {

    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */
    public function index()
    {
        // $tournament = Tournament::where('id', 3)
        //                         ->with('rounds', 'childTournaments', 'parentTournament')
        //                         ->get()
        //                         ->toJson();

        // return $tournament;

        $round = Round::where('id', 2)
                      ->with('tournaments', 'holes', 'players', 'players.country')
                      ->get()
                      ->toJson();

        return $round;
    }

}
