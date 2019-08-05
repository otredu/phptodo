<?php
function connectDB(){
    try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=mytodo','root','');
    return $pdo;
    } catch (PDOException $e) {
        die( $e->message());
    }
}

function dd($data){
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';
}