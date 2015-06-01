<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDefinitionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('definitions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
                        $table->integer('caracteristique_id')->unsigned();
                        $table->foreign('caracteristique_id')->references('id')->on('caracteristiques');
                        $table->integer('habit_id')->unsigned();
                        $table->foreign('habit_id')->references('id')->on('habits');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('definitions');
	}

}
