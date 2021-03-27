<?php


$mysqli = new mysqli("localhost", "root", "", "tags");

$sql = "SELECT name FROM tags 
			WHERE name LIKE '%" . $_GET['query'] . "%'
			LIMIT 10";

$result = $mysqli->query($sql);

$json = [];
while ($row = $result->fetch_assoc()) {
    $json[] = $row['name'];
}

echo json_encode($json);

