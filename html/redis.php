<?php
ini_set('display_errors',true);
error_reporting( E_ALL );
/**
 * Created by PhpStorm.
 * User: sohrab
 * Date: 04/02/16
 * Time: 15:50
 */
require 'vendor/autoload.php';

$host = getenv('REDIS_PORT_6379_TCP_ADDR');
$port = getenv('REDIS_PORT_6379_TCP_PORT');

echo $host . ':' . $port;
echo "<br>";

$redis = new Predis\Client('tcp://mymini@'.$host.':'.$port);
//$redis = new Predis\Client([
//    'schema' => 'tcp',
//    'host' => $host,
//    'port' => $port,
//    'auth' => 'mymini'
//]);

//$redis->auth('mymini');
echo $redis->dbsize();
if ($redis->isConnected()) {
    echo "Redis is connected";
} else {
    echo "Redis is not connected";
}