<?php
require_once __DIR__ . '/GradeCalculator.php';

// Quiz = 80, Activity = 90, Exam = 95.
$grades = [80, 90, 95];
$calculator = new GradeCalculator(new SimpleAverageStrategy());

echo "Strategy: Simple Average
";
echo 'Result: ' . number_format($calculator->calculate($grades), 2) . "
";

$calculator->setStrategy(new WeightedAverageStrategy());
echo "
Strategy: Weighted Average
";
echo 'Result: ' . number_format($calculator->calculate($grades), 2) . "
";
