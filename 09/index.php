<?php
//PREPARE
try {
	$conn = new \PDO("mysql:host=localhost; dbname=son_pdo", "root", "");
        
    $query = "SELECT * from `products` where id=:id";
    $stmt = $conn->prepare($query);
    $stmt->bindValue(':id', $_GET['id']);
    $stmt->execute();

    print_r($stmt->fetchAll());



} catch (\PDOException $e) {
	echo "Error! Message:" . $e->getMessage(). "Code: " . $e->getLine();
}

