<?php
require_once __DIR__ . '/Pattern.php';

$system = new StudentSystem();
$invoker = new CommandInvoker();

$invoker->run('Enroll Student', new EnrollCommand($system));
$invoker->run('Drop Subject', new DropSubjectCommand($system));
$invoker->run('Print Registration', new PrintRegistrationCommand($system));
$invoker->run('Logout', new LogoutCommand($system));
