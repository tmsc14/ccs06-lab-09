<?php

require "config.php";

use App\Pets;

try {
	Pets::register('Borjak da dog', 'Male', 'April 09, 2023', 'Teree', 'Borjakdadog@gmail.com', 'Fiesta communities dulo', '09982321298');
	echo "<li>Added 1 pet";

	$pets = [
		[
			'name' => 'Rocky',
			'gender' => 'Male',
			'birthdate' => 'May 05, 2022',
			'owner' => 'Teree',
			'email' => 'cabanayan.tereemari@gmail.com',
			'address' => 'Calulut San Fernando',
			'contact_number' => '09982321298'
		],
		[
			'name' => 'Maple',
			'gender' => 'Male',
			'birthdate' => 'December 14, 2022',
			'owner' => 'Teree',
			'email' => 'ctereemari@gmail.com',
			'address' => 'Calulut San Fernando',
			'contact_number' => '09982321298'
		]
	];
	Pets::registerMany($pets);
	echo "<li>Added " . count($pets) . " more pets";
	echo "<br /><a href='index.php'>Proceed to Index Page</a>";

} catch (PDOException $e) {
	error_log($e->getMessage());
	echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}

