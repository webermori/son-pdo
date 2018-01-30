<?php

try {
	$conn = new \PDO("mysql:host=localhost; dbname=son_pdo", "root", "");
        
        $query = "SELECT * from products";
        //$query = "INSERT INTO products (`name`, `desc`) values ('Joseph', 'Pirata ipsum dolor asids');";
        
        //Exec
//        $exec = $conn->exec($query);
//        print_r($exec);
        
        //Query
        $res = $conn->query($query);
        
        $list = $res->fetchAll();
        echo $list[0][2];
        //print_r($list);
        
} catch (\PDOException $e) {
	echo "Error! Message:" . $e->getMessage(). "Code: " . $e->getLine();
}

