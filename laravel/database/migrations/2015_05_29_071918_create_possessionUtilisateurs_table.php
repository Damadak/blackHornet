<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePossessionUtilisateursTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('possessionUtilisateurs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
                        $table->integer('utilisateur_id')->unsigned();
                        $table->foreign('utilisateur_id')->references('id')->on('utilisateurs');
                        $table->integer('role_id')->unsigned();
                        $table->foreign('role_id')->references('id')->on('roles');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('possessionUtilisateurs');
	}

}
