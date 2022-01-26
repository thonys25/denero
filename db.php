<?php


	try {
		$db = new PDO('mysql:host=localhost;dbname=mybase', 'root', '');
	}catch(PDOException $e) {
		echo $e->getMessage();
	}


	$sql = $db->prepare('SELECT (id, login, password, object_id) FROM users LEFT JOIN objects ON users.object_id = objects.id');
	$sql =$db->execute();

	$res = $sql->fetchAll(PDO::FETCH_ASSOC);

	foreach($res as $item) {}