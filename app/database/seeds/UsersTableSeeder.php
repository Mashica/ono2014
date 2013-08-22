<?php

class UsersTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		//  
		Eloquent::unguard();

		// clean table
		DB::table('users')->truncate();

		// Set timestamp for created and updated
		$rightnow = date("Y-m-d H:i:s");

		User::create(
			array(
			'login' => 'richard',
			'email' => 'richard@mashica.org',
			'password' => Hash::make('mashica2'),
			'name' => 'Richard',
			'lastname1' => 'Stoutner',
			'lastname2' => '',
			'email2' => 'richard@mashica.com',
			'tel' => '951 520 2645',
			'cel' => '951 439 5364',
			'address' => 'Escuadrón 201 #311',
			'colonia' => 'Colonia Reforma',
			'city' => 'Oaxaca',
			'state' => 'Oaxaca',
			'country' => 'MX',
			'birthday' => '1969-01-04',
			'isactive' => 1,
			'istraining' => 1,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'login' => 'marcello',
			'email' => 'marcello@spr-msh.com',
			'password' => Hash::make('mashica'),
			'name' => 'Marcello',
			'lastname1' => 'Conta',
			'lastname2' => '',
			'email2' => 'marcello@mashica.com',
			'tel' => '',
			'cel' => '',
			'address' => '',
			'colonia' => '',
			'city' => 'Madrid',
			'state' => 'Madrid',
			'country' => 'ES',
			'birthday' => '1972-06-20',
			'isactive' => 1,
			'istraining' => 0,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'login' => 'maritza',
			'email' => 'maritza@mashica.com',
			'password' => Hash::make('zacarracatelas'),
			'name' => 'Maritza',
			'lastname1' => 'Acevedo',
			'lastname2' => 'Melo',
			'email2' => 'maritza@mashica.com',
			'tel' => '951 520 2645',
			'cel' => '951 128 9190',
			'address' => 'Escuadrón 201 #311',
			'colonia' => 'Colonia Reforma',
			'city' => 'Oaxaca',
			'state' => 'Oaxaca',
			'country' => 'MX',
			'birthday' => '1969-06-22',
			'isactive' => 1,
			'istraining' => 1,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'login' => 'ackot',
			'email' => 'guad_sex@hotmail.com',
			'password' => Hash::make('ackot'),
			'name' => 'David',
			'lastname1' => 'Gómez',
			'lastname2' => 'López',
			'email2' => '',
			'tel' => '',
			'cel' => '951 505 0992',
			'address' => '',
			'colonia' => '',
			'city' => 'Oaxaca',
			'state' => 'Oaxaca',
			'country' => 'MX',
			'birthday' => '1995-11-16',
			'isactive' => 1,
			'istraining' => 1,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'login' => 'juliomayoral',
			'email' => 'anime_julio@hotmail.es',
			'password' => Hash::make('juliomayoral'),
			'name' => 'Julio',
			'lastname1' => 'Mayoral',
			'lastname2' => 'Miranda',
			'email2' => '',
			'tel' => '',
			'cel' => '951 235 3389',
			'address' => '',
			'colonia' => '',
			'city' => 'Oaxaca',
			'state' => 'Oaxaca',
			'country' => 'MX',
			'birthday' => '1996-11-01',
			'isactive' => 1,
			'istraining' => 0,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));

		User::create(
			array(
			'login' => 'joselo',
			'email' => 'joselo29@me.com',
			'password' => Hash::make('joselo'),
			'name' => 'José Luís',
			'lastname1' => 'González',
			'lastname2' => 'Ricárdez',
			'email2' => '',
			'tel' => '',
			'cel' => '222 563 2124',
			'address' => '',
			'colonia' => '',
			'city' => 'Puebla',
			'state' => 'Puebla',
			'country' => 'MX',
			'birthday' => '1978-11-30',
			'isactive' => 0,
			'istraining' => 0,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
		));




	}

}