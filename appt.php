<?php

	$name = $_GET["name"];

	$appt_date = $_GET["appt_date"];

	$from_location = $_GET["from_location"];

	$to_location = $_GET["to_location"];



	require_once('dpconfig.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO airplane_management VALUES ( '', '$name', '$appt_date', '$from_location', '$to_location', 'Booking'  )" )

		or die("Can not execute query");



	echo "Record inserted:<br> name = $name <br> appt_date = $appt_date <br> from_location = $from_location <br> to_location = $to_location ";



	echo "<p><a href=index.php>READ all records</a>";

?>