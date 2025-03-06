<?php
include_once "moduleCrud.php";

$app = new HttpHander();
$app->onGet(function () {
    $result = HttpHander::$connection->query("SELECT * FROM courses WHERE TRUE");
    $data = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row; // Store each row as an associative array
        }
    } else {
        echo "No results found.";
    }
    return $data;
});
$app->onPut(function (){
    $sqlStatment = 'INSERT INTO courses(name,credites,description) VALUE("PHP",13,"this is a very large description....")';
    HttpHander::$connection->query($sqlStatment);
});
$app->onPost(function (){
    $sqlStatment = 'UPDATE courses SET name = "PHP-LARAVEL" WHERE name = "PHP"';
    HttpHander::$connection->query($sqlStatment);
});
$app->onDel(function (){
    $sqlStatment = 'DELETE FROM courses c WHERE c.name = "PHP-LARAVEL"';
    HttpHander::$connection->query($sqlStatment);
});
