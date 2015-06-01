<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreferenceMagasinsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('preferenceMagasins', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
                        $table->integer('mannequin_id')->unsigned();
                        $table->foreign('mannequin_id')->references('id')->on('mannequins');
                        $table->integer('magasin_id')->unsigned();
                        $table->foreign('magasin_id')->references('id')->on('magasins');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('preferenceMagasins');
	}

}
