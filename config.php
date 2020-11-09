<?php

	ob_start();

	try {

		$con = new PDO("mysql:dbname=enigma;host=localhost", "abdur.rakib.1508", "Rakib1508");
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

	}
	catch(PDOException $e) {

		echo "Connection falied: " . $e->getMessage();

	}

?>
