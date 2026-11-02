<?php
interface GradeStrategy {
    public function calculate(array $grades): float;
}

class SimpleAverageStrategy implements GradeStrategy {
    public function calculate(array $grades): float {
        return array_sum($grades) / count($grades);
    }
}

class WeightedAverageStrategy implements GradeStrategy {
    public function calculate(array $grades): float {
        // Quiz 20%, Activity 30%, Exam 50%.
        return $grades[0] * 0.20 + $grades[1] * 0.30 + $grades[2] * 0.50;
    }
}

class GradeCalculator {
    public function __construct(private GradeStrategy $strategy) {}

    public function setStrategy(GradeStrategy $strategy): void {
        $this->strategy = $strategy;
    }

    public function calculate(array $grades): float {
        return $this->strategy->calculate($grades);
    }
}
