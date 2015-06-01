<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRangementsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rangements', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
                        $table->integer('gardeRobe_id')->unsigned();
                        $table->foreign('gardeRobe_id')->references('id')->on('gardeRobes');
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
		Schema::drop('rangements');
	}

}
