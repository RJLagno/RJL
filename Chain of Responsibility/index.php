<?php
require_once __DIR__ . '/Pattern.php';

$studentAffairs = new StudentAffairsHandler();
$registrar = new RegistrarHandler();
$finance = new FinanceHandler();
$ict = new ICTHandler();

$studentAffairs->setNext($registrar)->setNext($finance)->setNext($ict);

foreach (['Transcript of Records', 'Student ID Concern'] as $type) {
    echo "Request: $type\n";
    $studentAffairs->handle(new StudentRequest($type));
    echo "\n";
}
