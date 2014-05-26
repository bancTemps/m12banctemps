<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateValorationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('valorations', function(Blueprint $table)
		{
			$table->increments('id');

	        $table->integer('user_id')->unsigned()->index();
	        $table->integer('service_id')->unsigned()->index();                        			
	        $table->text('content');
	        $table->integer('nota');	
	        		
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
			$table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');

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
		Schema::drop('valorations');
	}

}
