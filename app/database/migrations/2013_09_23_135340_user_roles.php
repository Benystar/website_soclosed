<?php

use Illuminate\Database\Migrations\Migration;

class UserRoles extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('roles', function($table) {
            $table->increments('id');
    		$table->string('label', 128);
    		$table->text('description');    		
    		$table->timestamps(); // Adds created_at and updated_at columns
        });

        Schema::create('rel_user_roles', function($table) {
            $table->increments('id');
    		$table->integer('id_user');
    		$table->integer('id_role');    		
    		$table->timestamps(); // Adds created_at and updated_at columns
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('roles');
		Schema::drop('rel_user_roles');
	}

}