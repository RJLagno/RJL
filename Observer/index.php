<?php
require_once __DIR__ . '/Pattern.php';

$grades = new GradeSystem();
$grades->attach(new StudentPortal());
$grades->attach(new EmailNotification());
$grades->attach(new ParentNotification());

$grades->setGrade(1.75);
