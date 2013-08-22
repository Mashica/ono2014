<?php

class RacesTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('races')->truncate();

		// Set timestamp for created and updated
		$rightnow = date("Y-m-d H:i:s");


		Race::create(
			array(
			'racetype' => 'XC',
			'title' => '7 XC MTB Los Audelo',
			'seriesordinal' => '7',
			'seriesyear' => '2013',
			'fecha' => '2013-08-25',
			'starttime' => '09:00',
			'venue' => 'Los Audelo',
			'city' => 'Oaxaca',
			'state' => 'Oaxaca',
			'inscripciones' => 'Krotalus MTB',
			'inscripciones_dir' => 'Sabinos 309, Colonia Reforma, Oaxaca',
			'inscripciones_tel1' => '951 513 9422',
			'inscripciones_tel2' => '951 181 1205',
			'ispublished' => 1,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
			)
		);

		Race::create(
			array(
			'racetype' => 'XC',
			'title' => '8 XC MTB El Tule',
			'seriesordinal' => '8',
			'seriesyear' => '2013',
			'fecha' => '2013-08-08',
			'starttime' => '09:00',
			'venue' => 'El Tule',
			'city' => 'El Tule',
			'state' => 'Oaxaca',
			'inscripciones' => 'Krotalus MTB',
			'inscripciones_dir' => 'Sabinos 309, Colonia Reforma, Oaxaca',
			'inscripciones_tel1' => '951 513 9422',
			'inscripciones_tel2' => '951 181 1205',
			'ispublished' => 1,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
			)
		);

		Race::create(
			array(
			'racetype' => 'XC',
			'title' => '9 XC MTB Tlalixtac',
			'seriesordinal' => '9',
			'seriesyear' => '2013',
			'fecha' => '2013-09-29',
			'starttime' => '09:00',
			'venue' => 'Tlalixtac',
			'city' => 'Tlalixtac',
			'state' => 'Oaxaca',
			'inscripciones' => 'Krotalus MTB',
			'inscripciones_dir' => 'Sabinos 309, Colonia Reforma, Oaxaca',
			'inscripciones_tel1' => '951 513 9422',
			'inscripciones_tel2' => '951 181 1205',
			'ispublished' => 1,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
			)
		);

		Race::create(
			array(
			'racetype' => 'XCM',
			'title' => '1 XCM MTB Ixtepeji',
			'seriesordinal' => '1',
			'seriesyear' => '2013',
			'fecha' => '2013-10-13',
			'starttime' => '09:00',
			'venue' => 'Ixtepeji',
			'city' => 'Oaxaca',
			'state' => 'Oaxaca',
			'inscripciones' => 'Krotalus MTB',
			'inscripciones_dir' => 'Sabinos 309, Colonia Reforma, Oaxaca',
			'inscripciones_tel1' => '951 513 9422',
			'inscripciones_tel2' => '951 181 1205',
			'ispublished' => 1,
			'created_at' => $rightnow,
			'updated_at' => $rightnow
			)
		);

	}

}
