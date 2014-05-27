<?php
use Illuminate\Database\Migrations\Migration;

class ConfideSetupUsersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Creates the users table
        Schema::create('users', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('username', 25);
            $table->string('name', 25)->nullable();
            $table->string('surname', 25)->nullable();
            $table->string('email', 30);
            $table->integer('telephone');
            $table->string('password');
            $table->integer('points')->default('200');
            $table->string('photo')->default('img/avatar/user-avatar.jpg');
            $table->integer('status');
            $table->string('address', 25);
            $table->integer('municipi_id');
            $table->string('postalCode', 5);
            $table->string('confirmation_code');
            $table->string('remember_token')->nullable();
            $table->boolean('confirmed')->default(false);
            
            $table->timestamps();
        });


        // Creates password reminders table
        Schema::create('password_reminders', function($table)
        {
            $table->engine = 'InnoDB';
            $table->string('email');
            $table->string('token');
            $table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('password_reminders');
        Schema::drop('users');
    }

}
