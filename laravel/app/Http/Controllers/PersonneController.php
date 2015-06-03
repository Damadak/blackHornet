<?php namespace App\Http\Controllers;

use App\Personne;
use App\Utilisateur;

class PersonneController extends Controller {
    public function index()
	{                   
                            $personnes = Personne::with('utilisateur')->get();
                            return response($personnes->toJson(), 200, array('Content-Type' => 'application/json'));
	}
        
        public function show($id){
                $personne = Personne::find($id);
                $personne->utilisateur;
                return response($personne->toJson(), 200, array('Content-Type' => 'application/json'));
        }
     public function store(){
            
        }
}
