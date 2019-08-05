<?php
require "./libraries/task.php";
require "./libraries/functions.php";

$pdo = connectDB();

$statement = $pdo->prepare('select * from todos');
$statement->execute();

// $tasks = $statement->fetchAll(PDO::FETCH_OBJ);
$tasks = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');

require 'views/index.view.php';