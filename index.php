<?php
$request = [
    'method' => $_SERVER["REQUEST_METHOD"],
    'url' => $_SERVER['REQUEST_URI'],
    'header' => [],
    'get' => [],
    'data' => file_get_contents("php://input"),
];
// header
foreach (getallheaders() as $name => $value) {
    $request['header'][$name] = $value;
}
// get
foreach ($_GET as $key => $value) {
    $request['get'][$key] = $value;
}
print_r($request,true);
file_put_contents('log.txt', print_r($request,true));
