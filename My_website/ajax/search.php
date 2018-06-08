<?php

require_once('../includes/db.php');

$search = "%".$_POST['search']."%";

$query = "SELECT bird_id, bird_name FROM birds WHERE bird_name LIKE :search";
		$result = $DBH->prepare($query);
		$result->bindParam(':search', $search);
		$result->execute();


	$results = $result->fetchAll(PDO::FETCH_ASSOC);

	echo json_encode($results);
?>