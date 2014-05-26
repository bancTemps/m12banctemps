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

            $table->integer('servei_id')->unsigned()->index();
            $table->integer('estat');
            $table->integer('solicita_id')->unsigned()->index();		
            $table->foreign('servei_id')->references('id')->on('services')->onDelete('cascade');
            $table->foreign('solicita_id')->references('id')->on('users')->onDelete('cascade');

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
		Schema::drop('solicituds');
	}

}
