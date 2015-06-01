<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSessionVotesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sessionVotes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
                        $table->date('dateDebut');
                        $table->date('dateFin');
                        $table->string('description');
                        $table->time('heure');
                        $table->integer('nbPts');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sessionVotes');
	}

}
