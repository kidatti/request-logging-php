<?php
header("Access-Control-Allow-Origin: *");
$dir_log = 'logs/' . date("Ymd-his") . '/';
mkdir($dir_log);
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
// post
foreach ($_POST as $key => $value) {
    $request['post'][$key] = $value;
}
// post
foreach ($_FILES as $key => $value) {
    $request['files'][$key] = $value;
    print_r($value);
    move_uploaded_file($value['tmp_name'], $dir_log . $value['name']);
}
file_put_contents($dir_log . 'log.txt', print_r($request,true));
