<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGardeRobesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gardeRobes', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->integer('personne_id')->references('id')->on('personnes');
                        $table->string('nom');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('gardeRobes');
	}

}
