<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreferenceMarquesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('preferenceMarques', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
                        $table->integer('mannequin_id')->unsigned();
                        $table->foreign('mannequin_id')->references('id')->on('mannequins');
                        $table->integer('marque_id')->unsigned();
                        $table->foreign('marque_id')->references('id')->on('marques');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('preferenceMarques');
	}

}
