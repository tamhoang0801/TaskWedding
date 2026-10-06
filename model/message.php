```php
<?php
require_once __DIR__ . "/../config/connect.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $message = $_POST["message"] ?? "";
    $name = $_POST["name"] ?? "";
    $confirm = $_POST["confirm"] ?? "";

    $sql = "INSERT INTO confirmattend (name, message, confirm)
            VALUES (:name, :message, :confirm)";

    $stmt = $conn->prepare($sql);

    $stmt->execute([
        ":name" => $name,
        ":message" => $message,
        ":confirm" => $confirm
    ]);

    echo "
        <!DOCTYPE html>
        <html lang='vi'>
        <head>
            <meta charset='UTF-8'>
            <title>Thông báo</title>
            <style>
                body {
                    margin: 0;
                    height: 100vh;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    font-family: Arial, sans-serif;
                    background: #f5f1eb;
                }

                .notification {
                    padding: 30px 50px;
                    background: white;
                    border-radius: 15px;
                    text-align: center;
                    box-shadow: 0 5px 20px rgba(0,0,0,0.15);
                }

                .notification h2 {
                    color: #70502f;
                    margin-bottom: 10px;
                }

                .notification p {
                    color: #555;
                }
            </style>
        </head>

        <body>

            <div class='notification'>
                <h2>💌 Gửi thành công!</h2>
                <p>Cảm ơn bạn đã gửi lời chúc.</p>
                <p>Bạn sẽ được chuyển về trang chủ...</p>
            </div>

            <script>
                setTimeout(() => {
                    window.location.href = '../index.php';
                }, 2000);
            </script>

        </body>
        </html>
    ";

    exit;
}
?>
