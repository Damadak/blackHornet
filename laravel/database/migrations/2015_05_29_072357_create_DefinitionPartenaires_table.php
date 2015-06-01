<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDefinitionPartenairesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('definitionPartenaires', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
                        $table->integer('caracteristique_id')->unsigned();
                        $table->foreign('caracteristique_id')->references('id')->on('caracteristiques');
                        $table->integer('partenaire_id')->unsigned();
                        $table->foreign('partenaire_id')->references('id')->on('partenaires');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('definitionPartenaires');
	}

}
