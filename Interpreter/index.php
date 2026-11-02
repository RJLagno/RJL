<?php
require_once __DIR__ . '/Pattern.php';

$student = new StudentContext('BSIT', 4);

$query = new AndExpression(
    new TerminalExpression('PROGRAM', 'BSIT'),
    new TerminalExpression('YEAR', 4)
);
echo "Expression: PROGRAM = \"BSIT\" AND YEAR = 4\n";
echo "Result: " . ($query->interpret($student) ? 'TRUE' : 'FALSE') . "\n\n";

$otherQuery = new OrExpression(
    new TerminalExpression('PROGRAM', 'BSIT'),
    new TerminalExpression('PROGRAM', 'BSCS')
);
echo "Expression: PROGRAM = \"BSIT\" OR PROGRAM = \"BSCS\"\n";
echo "Result: " . ($otherQuery->interpret($student) ? 'TRUE' : 'FALSE') . "\n";
