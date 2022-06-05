<?php

$requestReceiver = file_get_contents("php://input");
$object = json_decode($requestReceiver, true);
var_dump($object);

?>