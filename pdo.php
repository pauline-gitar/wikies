<?php

$pdo = new PDO("mysql:host=locahost;dbname=wikies", "pauline");

$categories = $pdo->query('SELECT * FROM categorie')->fetchAll();





?>