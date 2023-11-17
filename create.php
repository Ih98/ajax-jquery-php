<?php
include('./Db/connect.php');

$name = $_POST['name'];
$description = $_POST['description'];

// Use named placeholders in the SQL query
$sql = $connect->prepare("INSERT INTO ajax  ( name, des ) VALUES ( :name, :des )");

// Bind parameters
$sql->bindParam(":name", $name);
$sql->bindParam(":des", $description);

if ($sql->execute()) {
    echo "hello";
} else {
    echo "Noo";
}
