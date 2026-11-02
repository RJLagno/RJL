<?php
require_once __DIR__ . '/Pattern.php';

$chat = new ChatMediator();
$juan = new Student('Juan', $chat);
$maria = new Student('Maria', $chat);
$pedro = new Student('Pedro', $chat);

foreach ([$juan, $maria, $pedro] as $student) {
    $chat->addStudent($student);
}
$juan->send('Hello everyone!');
