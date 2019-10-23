<?php
    try{
        $pdo = new PDO("mysql:host=localhost;dbname=desenvolvecion", "root", "741852");
        echo "Connet Successfully.";
    }catch(PDOException $e){
        die("Deu RUim." . $e->getMessage());
    }
?>