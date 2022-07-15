<?php

	$dsn = "mysql:host=localhost;dbname=DATABASE_NAME";

	try {
		$pdo = new PDO($dsn, 'USER', 'PASSWORD');
	}
	catch(PDOException $e) {
		echo $e->getMessage();
	}

?>