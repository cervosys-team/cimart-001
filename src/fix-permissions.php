<?php
// Fix permissions script
$laravelBasePath = __DIR__;
$dbPath = $laravelBasePath . '/database/database.sqlite'; 

// Fix database file permissions
if (file_exists($dbPath)) {
    echo "Changing database file permissions...\n";
    if (chmod($dbPath, 0664)) {
        echo "Successfully updated database file permissions\n";
    } else {
        echo "Failed to update database file permissions\n";
    }
} else {
    echo "Database file doesn't exist!\n";
}

// Fix directory permissions
$dbDir = dirname($dbPath);
echo "Changing database directory permissions...\n";
if (chmod($dbDir, 0775)) {
    echo "Successfully updated directory permissions\n";
} else {
    echo "Failed to update directory permissions\n";
}
