<?php

use Illuminate\Database\Migrations\Migration;

class CreateRacesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('races',function($table)
		{
			$table->increments('id');
			$table->string('racetype',5);
			$table->string('title',30);
			$table->smallInteger('seriesordinal')->nullable();
			$table->string('seriesyear',4)->nullable();
			$table->date('fecha');
			$table->time('starttime');
			$table->string('venue',30);
			$table->string('city',50);
			$table->string('state',50);
			$table->string('inscripciones',50);
			$table->string('inscripciones_dir',50);
			$table->string('inscripciones_tel1',30);
			$table->string('inscripciones_tel2',30);
			$table->boolean('ispublished');
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
		Schema::drop('races');
	}

}