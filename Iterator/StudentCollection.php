<?php
class Student {
    public function __construct(public string $id, public string $name) {}
}

// IteratorAggregate lets foreach access students without exposing the array.
class StudentCollection implements IteratorAggregate {
    private array $students = [];

    public function add(Student $student): void {
        $this->students[] = $student;
    }

    public function getIterator(): Traversable {
        return new ArrayIterator($this->students);
    }
}
