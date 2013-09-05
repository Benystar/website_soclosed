<?php

use Illuminate\Database\Migrations\Migration;

class CreateUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($table) {
            $table->increments('id');
    		$table->string('username', 128)->unique();
    		$table->string('password', 64);
    		$table->timestamps(); // Adds created_at and updated_at columns
        });
 		
 		
        DB::table('users')->insert(array(
            'username'  => 'admin',
            //'password'  => Hash::make('password'), -- PHP 5.5 nécessaire pour utiliser Hash (fonction Bcrypt)
            'password'  => crypt('password'),
            'name'  => 'Admin'
        ));

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}