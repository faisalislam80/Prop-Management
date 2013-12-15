<?php

use Illuminate\Database\Migrations\Migration;

class AddUsernameColumnToManagerUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::table('manager_user', function($table)
        {
            $table->string('username',64)->unique();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::table('manager_user', function($table)
        {
            $table->dropColumn('username');
        });
	}

}