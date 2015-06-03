<?php

use Illuminate\Database\Seeder;
use App\Utilisateur;

class UtilisateurTableSeeder extends Seeder {

    public function run()
    {
        DB::table('utilisateurs')->delete();
        // Une des multiples syntaxes possibles offertes par Laravel
        Utilisateur::create([
            'email' => 'test@gmail.com',
            'username' => 'test',
            'password' => '1234'
        ]);
        
    }

}
