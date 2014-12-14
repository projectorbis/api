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
        return 'hello World';
    }

}
