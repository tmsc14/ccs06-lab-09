<?php

require "config.php";

use App\Pets;

// Save the Student information, and automatically redirect to index

try {
	$id = $_POST['id'];
	$name = $_POST['name'];
	$gender = $_POST['gender'];
	$birthdate = $_POST['birthdate'];
	$owner = $_POST['owner'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$contact_number = $_POST['contact_number'];

	if ($gender == 'Male')
	{
		$gender = 'Male';
	}
	
	else if ($gender == 'Female')
	{
		$gender = 'Female';
	}
	
	$result = Pets::update($id, $name, $gender, $birthdate, $owner, $email, $address, $contact_number);

	if ($result) {
		header('Location: index.php');
	}

} catch (PDOException $e) {
	error_log($e->getMessage());
	echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}

