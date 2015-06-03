<?php

namespace App\Http\Controllers;

use App\Mannequin;

class MannequinController extends Controller {
    /*
      |--------------------------------------------------------------------------
      | Home Controller
      |--------------------------------------------------------------------------
      |
      | This controller renders your application's "dashboard" for users that
      | are authenticated. Of course, you are free to change or remove the
      | controller as you wish. It is just here to get your app started!
      |
     */

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function index() {
        return view('view à faire');
    }

    public function create() {
        return ('test');
    }

    public function show($id) {
        $mannequins = Mannequin::find($id);
        $mannequins->personne->utilisateur;

        return response($mannequins->toJson(), 200, array('Content-Type' => 'application/json'));
    }

    public function store() {
        
    }

}
