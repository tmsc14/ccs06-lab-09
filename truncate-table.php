<?php

require "config.php";

use App\Pets;

try {
	Pets::clearTable();
	echo "<li>Truncated table";
	echo "<br /><a href='index.php'>Return to Index Page</a>";

} catch (PDOException $e) {
	error_log($e->getMessage());
	echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}

