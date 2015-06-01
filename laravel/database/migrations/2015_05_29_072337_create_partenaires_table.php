<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartenairesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('partenaires', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
                        $table->string('nomMarque')->unique();
                        $table->string('adresse');
                        $table->string('ville');
                        $table->string('cp');
                        $table->string('telephone');
                        $table->string('representant');
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
		Schema::drop('partenaires');
	}

}
