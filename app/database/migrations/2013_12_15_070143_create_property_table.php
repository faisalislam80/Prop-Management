<?php

use Illuminate\Database\Migrations\Migration;

class CreatePropertyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('property', function($table)
        {
            $table->increments('id');
            $table->smallInteger('type')->default(0)->unsigned();
            $table->string('name',128);
            $table->string('address',255);
            $table->string('city',128);
            $table->string('state',32);
            $table->smallInteger('zip')->unsigned();
            $table->smallInteger('manager');
            $table->string('phone',20);
            $table->string('cell',20);
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
        Schema::drop('property');
	}

}