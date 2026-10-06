<?php
require_once __DIR__ . "/../config/connect.php";
global $conn;
$sql = "SELECT * FROM confirmattend";

$stmt = $conn->prepare($sql);
$stmt->execute();

$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($data, JSON_UNESCAPED_UNICODE);
?>