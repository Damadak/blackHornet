<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonnesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('personnes', function(Blueprint $table)
		{
			$table->increments('id')->unsigned();
			$table->timestamps();
                        $table->string('nom');
                        $table->string('prenom');
                        $table->string('sexe');
                        $table->date('dateNaissance');
                        $table->integer('utilisateur_id')->unsigned();
                        $table->foreign('utilisateur_id')->references('id')->on('utilisateurs');
                        
                        
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('personnes');
	}

}
