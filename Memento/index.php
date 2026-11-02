<?php
require_once __DIR__ . '/StudentProfile.php';

$student = new StudentProfile('Juan Dela Cruz', 'BSIT', 3, 'juan@example.com');
$history = new ProfileHistory();

echo "Original Profile:
";
$student->show();

$history->save($student); // Save before changing anything.
$student->program = 'BSCS';
$student->year = 4;

echo "
Current Profile:
";
$student->show();

echo "
Undo...
Restored Profile:
";
$history->undo($student);
$student->show();
