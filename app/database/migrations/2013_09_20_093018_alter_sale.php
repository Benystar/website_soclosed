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
		    $table->index('alias');
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
			$table->dropIndex('sales_alias_index');
			$table->dropColumn('alias');
			$table->dropColumn('id_user');
		});
	}

}