<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepresentationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('representations', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
                        $table->integer('shooting_id')->unsigned();
                        $table->foreign('shooting_id')->references('id')->on('shootings');
                        $table->integer('session_id')->unsigned();
                        $table->foreign('session_id')->references('id')->on('sessionVotes');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('representations');
	}

}
