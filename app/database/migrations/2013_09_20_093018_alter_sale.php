<?php

use Illuminate\Database\Migrations\Migration;

class AlterSale extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('sales', function($table)
		{
		    $table->string('alias');
		    $table->integer('id_user');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		$table->dropColumn('alias');
		$table->dropColumn('id_user');
	}

}