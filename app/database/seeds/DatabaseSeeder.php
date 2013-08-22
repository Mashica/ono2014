<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UsersTableSeeder');
		$this->command->info('Users table seeded!');

		$this->call('RacesTableSeeder');
		$this->command->info('Races table seeded!');
	}

}