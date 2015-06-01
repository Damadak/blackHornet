<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('images', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
                        $table->integer('shooting_id')->unsigned();
                        $table->foreign('shooting_id')->references('id')->on('shootings');
                        $table->date('datePublication');
                        $table->string('format');
                        $table->string('dimension');
                        $table->string('statut');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('images');
	}

}
