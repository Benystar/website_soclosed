<?php

use Illuminate\Database\Migrations\Migration;

class CreateSales extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sales', function($table) {
            $table->increments('id');
    		$table->string('name', 128);
    		$table->text('description');
    		$table->dateTime('sale_date');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sales');
	}

}