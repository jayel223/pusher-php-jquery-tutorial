<?php
require "./database.php";


$name    = $_POST["name"];
$message = $_POST["message"];

$db->query("INSERT INTO tbl_messages (name, message) VALUES ('$name', '$message')");

$pusher->trigger('my-channel', 'load-messages', [
    "message" => "123"
]);