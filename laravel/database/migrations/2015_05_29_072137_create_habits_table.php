<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHabitsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('habits', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->string('référence');
                        $table->string('type');
                        $table->string('marque_id')->unsigned();
                        $table->foreign('marque_id')->references('id')->on('marques');
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
		Schema::drop('habits');
	}

}
