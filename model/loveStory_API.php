<?php

header("Content-Type: application/json; charset=UTF-8");

$jsonFile = __DIR__ . "/loveStory.json";

if ($_SERVER["REQUEST_METHOD"] !== "PUT") {
    http_response_code(405);

    echo json_encode([
        "success" => false,
        "message" => "Method không được hỗ trợ"
    ], JSON_UNESCAPED_UNICODE);

    exit;
}

$input = file_get_contents("php://input");

$data = json_decode($input, true);

if (!is_array($data)) {
    http_response_code(400);

    echo json_encode([
        "success" => false,
        "message" => "Dữ liệu JSON không hợp lệ"
    ], JSON_UNESCAPED_UNICODE);

    exit;
}

/*
 * Ghi đè nội dung vào loveStory.json
 */
$result = file_put_contents(
    $jsonFile,
    json_encode(
        $data,
        JSON_PRETTY_PRINT |
        JSON_UNESCAPED_UNICODE
    )
);

if ($result === false) {
    http_response_code(500);

    echo json_encode([
        "success" => false,
        "message" => "Không thể ghi vào loveStory.json"
    ], JSON_UNESCAPED_UNICODE);

    exit;
}

echo json_encode([
    "success" => true,
    "message" => "Đã cập nhật loveStory.json thành công",
    "data" => $data
], JSON_UNESCAPED_UNICODE);