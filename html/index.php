<?php
ini_set('display_errors',true);
error_reporting( E_ALL );

echo "--Homepage-";
echo "<br>";

$host = getenv('MYSQL_PORT_3306_TCP_ADDR');
$port = getenv('MYSQL_PORT_3306_TCP_PORT');

$link = mysqli_connect($host, 'root', 'sample_password', 'mysql', $port);

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;

mysqli_close($link);