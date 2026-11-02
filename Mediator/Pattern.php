<?php
interface Mediator {
    public function send(Student $sender, string $message): void;
}

class ChatMediator implements Mediator {
    private array $students = [];

    public function addStudent(Student $student): void {
        $this->students[] = $student;
    }

    public function send(Student $sender, string $message): void {
        echo "{$sender->name}: $message\n";
        foreach ($this->students as $student) {
            if ($student !== $sender) {
                $student->receive($sender->name, $message);
            }
        }
    }
}

class Student {
    public function __construct(public string $name, private Mediator $mediator) {}

    public function send(string $message): void {
        $this->mediator->send($this, $message);
    }

    public function receive(string $sender, string $message): void {
        echo "{$this->name} receives:\n$sender: $message\n";
    }
}
