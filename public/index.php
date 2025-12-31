<?php

$dbHost = getenv('DB_HOST');
$dbPort = getenv('DB_PORT');
$dbName = getenv('DB_NAME');
$dbUser = getenv('DB_USER');
$dbPass = getenv('DB_PASSWORD');

try {
    $dsn = "mysql:host=$dbHost;port=$dbPort;dbname=$dbName;charset=utf8";
    $pdo = new PDO($dsn, $dbUser, $dbPass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Database connection failed');
}

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$routes = [
    '/' => function() {
    echo "<h1>Main Page</h1>";
    echo "<p>This is the main page.</p>";
    },
    '/about' => function() {
    echo "<h1>About Page</h1>";
    echo "<p>This is a simple router page.</p>";
    },
    '/contact' => function() {
    echo "<h1>Contact Page</h1>";
    echo "<p>This is the contact page.</p>";
    }
];

if (array_key_exists($path, $routes)) {
    $routes[$path]();
} else {
    http_response_code(404);
    echo "<h1>404 - Page not found</h1>";
}