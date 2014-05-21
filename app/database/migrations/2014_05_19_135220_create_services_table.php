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
                        $table->date('dataInici');
			$table->date('dataFinal');
			$table->integer('duracio');
			$table->string('localitzacio', 25);
			$table->integer('punts');
			$table->string('slug', 25);
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
		Schema::drop('services');
	}

}
