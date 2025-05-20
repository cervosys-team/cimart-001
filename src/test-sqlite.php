<?php
// Save as test-sqlite.php
$dbPath = '/var/www/html/database/database.sqlite';

try {
    $pdo = new PDO('sqlite:' . $dbPath);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Try to write to the database
    $pdo->exec('CREATE TABLE IF NOT EXISTS test_table (id INTEGER PRIMARY KEY, test TEXT)');
    $stmt = $pdo->prepare('INSERT INTO test_table (test) VALUES (?)');
    $stmt->execute(['Test at ' . date('Y-m-d H:i:s')]);
    
    echo "Successfully wrote to the database!\n";
    
    // Read from database
    $result = $pdo->query('SELECT * FROM test_table ORDER BY id DESC LIMIT 1')->fetch(PDO::FETCH_ASSOC);
    echo "Last record: " . print_r($result, true) . "\n";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
