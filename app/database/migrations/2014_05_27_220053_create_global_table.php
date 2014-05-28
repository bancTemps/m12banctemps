<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGlobalTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('banctemps', function(Blueprint $table)
		{
			$table->integer('puntos_iniciales')->default(200);
                        $table->integer('puntos_minimos')->default(0);
                        $table->integer('dias_inactividad_servicio')->default(60);
                        $table->integer('dias_confirmacion_servicio')->default(15);
                        $table->integer('dias_inactividad_luser')->default(60);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('banctemps');
	}

}
