<?php

use Illuminate\Database\Seeder;
use App\Mannequin;

class MannequinTableSeeder extends Seeder {

    public function run() {
        /*
         * Le bcrypt est obligatoire pour le système de Laravel
         */
        DB::table('mannequins')->delete();
        Mannequin::create([
            'description' => 'un mec cool',
            'emploi' => 'ingenieur media',
            'telephone' => '123456',
            'villeShopping' => 'lausanne',
            'citation' => 'il fait beau',
            'statut' => 'marié',
            'personne_id' => '1',
        ]);

        Mannequin::create([
            'description' => 'un mec rigolo',
            'emploi' => 'bucheron',
            'telephone' => '123456',
            'villeShopping' => 'cossonay',
            'citation' => 'il fait chaud',
            'statut' => 'célibataire',
            'personne_id' => '2',
        ]);
    }

}
