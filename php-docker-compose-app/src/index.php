<?php
$host = getenv('DB_HOST');
$dbname = getenv('DB_NAME');
$username = getenv('DB_USER');
$password = getenv('DB_PASSWORD');

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Handle HTTP requests
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $stmt = $pdo->query("SELECT * FROM users");
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode(['message' => 'dsadsad request method.']);
        #echo json_encode($results);
    } else {
        echo json_encode(['message' => 'Unsupported request method.']);
    }
} catch (PDOException $e) {
    echo json_encode(['error' => $e->getMessage()]);
}
?>