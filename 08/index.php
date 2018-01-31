<?php
//SQL INJECTION
try {
	$conn = new \PDO("mysql:host=localhost; dbname=son_pdo", "root", "");
        
    $query = "SELECT * from `products` where id={$_GET['id']}";
    //$query = "INSERT INTO products (`name`, `desc`) values ('Joseph', 'Pirata ipsum dolor asids');";

    foreach($conn->query($query) as $product){
        echo $product['id'];
        echo "<br>";
        echo $product['name'];
        echo "<br>";
        echo $product['desc'];
        echo "<br>";
    }



} catch (\PDOException $e) {
	echo "Error! Message:" . $e->getMessage(). "Code: " . $e->getLine();
}

