<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMagasinTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('magasins', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
                        $table->string('nom')->unique();
                        $table->string('adresse');
                        $table->string('telephone');
                        $table->string('url');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('magasins');
	}

}
