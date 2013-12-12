<?php

use Illuminate\Database\Migrations\Migration;

class UpdateUsers extends Migration {

	public function up()
	{
		Schema::table('users', function($table)
		{
		    $table->string('address');
		    $table->string('zip_code');
		    $table->string('city');
		});
	}

	public function down()
	{

		Schema::table('users', function($table)
		{
		   	$table->dropColumn('address');
			$table->dropColumn('zip_code');
			$table->dropColumn('city');
		});
	}
}