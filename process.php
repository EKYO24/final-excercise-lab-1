<?php
header('Content-Type: application/json');
$jsonInput = file_get_contents('php://input');
$data = json_decode($jsonInput, true);
$name = !empty($data['name']) ? $data['name'] : 'Guest';
$response = [
    "status" => "success",
    "message" => "Welcome, " . $name . "!"
];
echo json_encode($response);
?>
