<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrixsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('prixs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
                        $table->integer('sessionVote_id')->unsigned();
                        $table->foreign('SessionVote_id')->references('id')->on('sessionVotes');
                        $table->integer('partenaire_id')->unsigned();
                        $table->foreign('partenaire_id')->references('id')->on('partenaires');
                        $table->string('nom');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('prixs');
	}

}
