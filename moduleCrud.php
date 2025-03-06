<?php
class HttpHander
{
    public static $connection;
    function __construct()
    {
        header("content-type:application/json");
        if (!isset(HttpHander::$connection)) {
            try {
                HttpHander::$connection = mysqli_connect("localhost", "root", "", "training");
            } catch (Exception $ex) {
                echo $ex->getMessage();
            }
        }
    }
    private static function Response(string $name, $innerFunction)
    {
        if ($_SERVER["REQUEST_METHOD"] === $name) {
            try {
                echo json_encode($innerFunction()??[]);
            } catch (Exception $ex) {
                http_response_code(500);
                echo json_encode(["Message" => $ex->getMessage()]);
            }
        }
    }
    public function onGet($innerFunction): void
    {
        HttpHander::Response("GET", $innerFunction);
    }
    function onPost($innerFunction): void
    {
        HttpHander::Response("POST", $innerFunction);
    }
    function onPut($innerFunction): void
    {
        HttpHander::Response("PUT", $innerFunction);
    }
    function onDel($innerFunction): void
    {
        HttpHander::Response("DELETE", $innerFunction);
    }
}
