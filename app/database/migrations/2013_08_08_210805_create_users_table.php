<?php

use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users',function($table){
			$table->increments('id');
			$table->string('login',30)->unique();
			$table->string('email',50)->unique();
			$table->string('password',60);
			$table->string('name',50);
			$table->string('lastname1',50);
			$table->string('lastname2',50)->nullable();
			$table->string('tel',30)->nullable();
			$table->string('cel',30)->nullable();
			$table->string('email2',50)->nullable();

			$table->string('address',50)->nullable();
			$table->string('colonia',50)->nullable();
			$table->string('city',50)->nullable();
			$table->string('state',50)->nullable();
			$table->string('country',2)->nullable();

			$table->date('birthday')->nullable();

			$table->boolean('isactive')->default(0);
			$table->boolean('istraining')->default(0);
			$table->boolean('isinvisible')->default(0);
			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}