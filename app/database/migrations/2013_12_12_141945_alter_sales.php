<?php

use Illuminate\Database\Migrations\Migration;

class AlterSales extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('sales', function($table)
		{
		    $table->integer('visibility');
		    $table->integer('status');		   
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('sales', function($table)
		{
			$table->dropColumn('visibility');
			$table->dropColumn('status');		
		});
	}
}