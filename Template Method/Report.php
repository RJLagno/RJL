<?php
abstract class Report {
    final public function generateReport(): void {
        $this->header();
        $this->data();
        $this->footer();
    }

    protected function header(): void {
        echo "========================
";
        echo $this->title() . "
";
        echo "========================
";
    }

    abstract protected function title(): string;
    abstract protected function data(): void;

    protected function footer(): void {
        echo "========================
END OF REPORT
========================
";
    }
}

class StudentReport extends Report {
    protected function title(): string { return 'STUDENT REPORT'; }
    protected function data(): void {
        echo "Student ID: 2026-001
Name: Juan Dela Cruz
Program: BSIT
";
    }
}

class GradeReport extends Report {
    protected function title(): string { return 'GRADE REPORT'; }
    protected function data(): void {
        echo "Student: Juan Dela Cruz
Grade: 1.75
";
    }
}

class EnrollmentReport extends Report {
    protected function title(): string { return 'ENROLLMENT REPORT'; }
    protected function data(): void {
        echo "Student: Juan Dela Cruz
Status: Enrolled
";
    }
}
