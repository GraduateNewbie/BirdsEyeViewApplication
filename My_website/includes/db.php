<?php
session_start();
	$host = 'localhost';
	$dbname ='iivdezyn_bird';
$user ='iivdezyn_bird';
$pass ='BirdHouse15';

	try {
		$DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);//connection to database
        $DBH->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e) {
		echo $e->getMessage();
	}
?>
