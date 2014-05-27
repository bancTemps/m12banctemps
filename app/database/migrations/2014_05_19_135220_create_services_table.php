<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('services', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string('user_id');
			$table->string('nom', 25);
			$table->string('descripcio');
                        $table->integer('categoria_id');
			$table->string('dataInici');
			$table->string('dataFinal');
			$table->integer('duracio');
			$table->integer('municipi_id');
			$table->integer('punts');
			$table->string('slug', 25);
			
			$table->timestamps();
                        //$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('services');
	}

}
