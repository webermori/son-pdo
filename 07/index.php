<?php
//Query on the run
try {
	$conn = new \PDO("mysql:host=localhost; dbname=son_pdo", "root", "");
        
    $query = "SELECT * from `products` order by id ASC";
    //$query = "INSERT INTO products (`name`, `desc`) values ('Joseph', 'Pirata ipsum dolor asids');";

    foreach($conn->query($query) as $product){
        echo $product['name'];
        echo "<br>";
    }



} catch (\PDOException $e) {
	echo "Error! Message:" . $e->getMessage(). "Code: " . $e->getLine();
}

