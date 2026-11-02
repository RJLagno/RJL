<?php
class StudentProfileMemento {
    public function __construct(public array $data) {}
}

class StudentProfile {
    public function __construct(
        public string $name,
        public string $program,
        public int $year,
        public string $email
    ) {}

    public function save(): StudentProfileMemento {
        return new StudentProfileMemento([$this->name, $this->program, $this->year, $this->email]);
    }

    public function restore(StudentProfileMemento $saved): void {
        [$this->name, $this->program, $this->year, $this->email] = $saved->data;
    }

    public function show(): void {
        echo "Name: $this->name
Program: $this->program
Year: $this->year
Email: $this->email
";
    }
}

class ProfileHistory {
    private array $history = [];

    public function save(StudentProfile $profile): void {
        $this->history[] = $profile->save();
    }

    public function undo(StudentProfile $profile): void {
        if ($this->history) {
            $profile->restore(array_pop($this->history));
        }
    }
}
