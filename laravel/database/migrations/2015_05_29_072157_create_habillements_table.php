<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHabillementsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('habillements', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->integer('habit_id')->unsigned();
                        $table->foreign('habit_id')->references('id')->on('habits');
                        $table->integer('mannequin_id')->unsigned();
                        $table->foreign('mannequin_id')->references('id')->on('mannequins');
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
		Schema::drop('habillements');
	}

}
