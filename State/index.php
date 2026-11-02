<?php
require_once __DIR__ . '/Pattern.php';

$student = new Student(new ApplicantState());
$student->showState();
echo "Action: Enroll\n";
$student->enroll();

echo "\n";
$student->setState(new PreAssessedState());
$student->showState();
echo "Action: Enroll\n";
$student->enroll();
$student->showState();
