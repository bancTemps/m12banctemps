<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitudsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('solicituds', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->integer('servei_id');
                        $table->integer('estat');
                        $table->integer('solicita_id');
			$table->timestamps();
                        $table->foreign('servei_id')->references('id')->on('services')->onDelete('cascade');
                        $table->foreign('solicita_id')->references('id')->on('users')->onDelete('cascade');


		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('solicituds');
	}

}
