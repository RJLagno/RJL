<?php
require_once __DIR__ . '/StudentCollection.php';

$students = new StudentCollection();
$students->add(new Student('2026-001', 'Juan'));
$students->add(new Student('2026-002', 'Maria'));
$students->add(new Student('2026-003', 'Pedro'));

echo "Student List
";
foreach ($students as $student) {
    echo "$student->id - $student->name
";
}
