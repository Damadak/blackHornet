<?php

use Illuminate\Database\Seeder;
use App\Personne;

class PersonneTableSeeder extends Seeder {

    public function run()
    {

        DB::table('personnes')->delete();
        Personne::create([
            'nom' =>'duvoisin',
            'prenom' => 'jean',
            'sexe' => 'male',
            'dateNaissance' => '2015-06-02',
            'utilisateur_id' => '6',
        ]);
        
        Personne::create([
            'nom' =>'delafraise',
            'prenom' => 'paul',
            'sexe' => 'male',
            'dateNaissance' => '2015-06-03',
            'utilisateur_id' => '7',
        ]);
   
   
    }

}


