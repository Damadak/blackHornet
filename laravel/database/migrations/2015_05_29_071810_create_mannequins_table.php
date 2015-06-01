<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMannequinsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mannequins', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
                        $table->string('description');
                        $table->string('emploi');
                        $table->string('telephone');
                        $table->string('villeShopping');
                        $table->string('citation');
                        $table->string('statut');
                        $table->integer('personne_id')->unsigned();
                        $table->foreign('personne_id')->references('id')->on('personnes');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('mannequins');
	}

}
