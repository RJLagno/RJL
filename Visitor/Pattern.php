<?php
interface Visitor {
    public function visitStudent(Student $student): void;
    public function visitFaculty(Faculty $faculty): void;
    public function visitAlumni(Alumni $alumni): void;
}

interface Element {
    public function accept(Visitor $visitor): void;
}

class Student implements Element {
    public function accept(Visitor $visitor): void { $visitor->visitStudent($this); }
}
class Faculty implements Element {
    public function accept(Visitor $visitor): void { $visitor->visitFaculty($this); }
}
class Alumni implements Element {
    public function accept(Visitor $visitor): void { $visitor->visitAlumni($this); }
}

class CSVExportVisitor implements Visitor {
    public function visitStudent(Student $student): void { echo "Student exported.\n"; }
    public function visitFaculty(Faculty $faculty): void { echo "Faculty exported.\n"; }
    public function visitAlumni(Alumni $alumni): void { echo "Alumni exported.\n"; }
}
class ReportVisitor implements Visitor {
    public function visitStudent(Student $student): void { echo "Student report generated.\n"; }
    public function visitFaculty(Faculty $faculty): void { echo "Faculty report generated.\n"; }
    public function visitAlumni(Alumni $alumni): void { echo "Alumni report generated.\n"; }
}
class StatisticsVisitor implements Visitor {
    public function visitStudent(Student $student): void { echo "Student counted.\n"; }
    public function visitFaculty(Faculty $faculty): void { echo "Faculty counted.\n"; }
    public function visitAlumni(Alumni $alumni): void { echo "Alumni counted.\n"; }
}
