<?php
require_once __DIR__ . '/Report.php';

$reports = [new StudentReport(), new GradeReport(), new EnrollmentReport()];
foreach ($reports as $report) {
    $report->generateReport();
    echo "
";
}
