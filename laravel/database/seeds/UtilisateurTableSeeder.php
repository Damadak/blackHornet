<?php

use Illuminate\Database\Seeder;
use App\Utilisateur;

class UtilisateurTableSeeder extends Seeder {

    public function run()
    {
        /*
         * Le bcrypt est obligatoire pour le système de Laravel
         */
        DB::table('utilisateurs')->delete();
        Utilisateur::create([
            'email' => 'moderator@bar.com',
            'username' => 'moderator',
            'password' => bcrypt('123456'),
        ]);
        
                Utilisateur::create([
            'email' => 'greg@bar.com',
            'username' => 'greg',
            'password' => bcrypt('123456'),
        ]);
   
   
    }

}


