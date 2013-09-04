<?php

use Illuminate\Database\Migrations\Migration;

class CreateItems extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('items', function($table) {
            $table->increments('id');
    		$table->string('name', 128);
    		$table->text('description');
    		$table->float('price');
    		$table->string('picture_url', 255);
    		$table->integer('id_sale');
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
		Schema::drop('items');
	}

}