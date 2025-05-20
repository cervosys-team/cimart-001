<?php
// Get the absolute path to your SQLite database
$laravelBasePath = __DIR__;
$dbPath = $laravelBasePath . '/database/database.sqlite';

// If you're using a different path, change it here
// $dbPath = '/custom/path/to/database.sqlite'; 

echo "Database path: $dbPath\n";
echo "File exists: " . (file_exists($dbPath) ? 'Yes' : 'No') . "\n";
echo "Is writable: " . (is_writable($dbPath) ? 'Yes' : 'No') . "\n";
echo "Permissions: " . substr(sprintf('%o', fileperms($dbPath)), -4) . "\n";
echo "Owner: " . posix_getpwuid(fileowner($dbPath))['name'] . "\n";
echo "Group: " . posix_getgrgid(filegroup($dbPath))['name'] . "\n";
echo "PHP running as: " . exec('whoami') . "\n";

// Check parent directory permissions
$dbDir = dirname($dbPath);
echo "\nDatabase directory: $dbDir\n";
echo "Directory exists: " . (file_exists($dbDir) ? 'Yes' : 'No') . "\n";
echo "Directory is writable: " . (is_writable($dbDir) ? 'Yes' : 'No') . "\n";
echo "Directory permissions: " . substr(sprintf('%o', fileperms($dbDir)), -4) . "\n";
