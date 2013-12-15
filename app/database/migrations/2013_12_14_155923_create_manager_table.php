<?php

use Illuminate\Database\Migrations\Migration;

class CreateManagerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('manager_user', function($table)
        {
            $table->increments('id');
            $table->string('email');
            $table->string('name', 100);
            $table->string('password', 100);
            $table->timestamps();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('manager_user');
	}

}