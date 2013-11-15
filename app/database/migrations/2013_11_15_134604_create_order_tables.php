<?php

use Illuminate\Database\Migrations\Migration;

class CreateOrderTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orders', function($table) {
            $table->increments('id');
    		$table->float('amount');
    		$table->integer('id_sale');
    		$table->integer('id_user');
    		$table->string('delivery_recipient');
    		$table->string('delivery_address');
    		$table->string('delivery_zip_code');
    		$table->string('delivery_city');

    		$table->timestamps(); // Adds created_at and updated_at columns
        });

        Schema::create('rel_order_items', function($table) {
            $table->increments('id');
    		$table->integer('id_order');
    		$table->integer('id_item');
    		
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
		Schema::drop('orders');
		Schema::drop('rel_order_items');
	}

}