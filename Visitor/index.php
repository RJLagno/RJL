<?php
require_once __DIR__ . '/Pattern.php';

$records = [new Student(), new Faculty(), new Alumni()];
$visitors = [
    'CSV Export Visitor' => new CSVExportVisitor(),
    'Report Visitor' => new ReportVisitor(),
    'Statistics Visitor' => new StatisticsVisitor()
];

foreach ($visitors as $title => $visitor) {
    echo "$title\n";
    foreach ($records as $record) {
        $record->accept($visitor);
    }
    echo "\n";
}
