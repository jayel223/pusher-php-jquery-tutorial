<?php
require './vendor/autoload.php';

$host     = "localhost";
$user     = "root";
$password = "";
$dbname   = "pusher";

$db = new mysqli($host, $user, $password, $dbname);

$options = array(
    'cluster' => 'eu',
    'useTLS' => true
);
$pusher  = new Pusher\Pusher(
    'c3477fa092bd6f0e0d6a',
    'f1f9d41fe134df4c1282',
    '1860610',
    $options
);