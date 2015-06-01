<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShootingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('shootings', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
                        $table->string('adresse');
                        $table->date('date');
                        $table->integer('mannequin_id')->unsigned();
                        $table->foreign('mannequin_id')->references('id')->on('mannequins');
                        $table->string('ville');
                        $table->string('impression');
                        $table->time('heureDebut');
                        $table->time('heureFin');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('shootings');
	}

}
