<?php
interface Command {
    public function execute(): void;
}

class StudentSystem {
    public function enroll(): void { echo "Student successfully enrolled.\n"; }
    public function dropSubject(): void { echo "Subject successfully dropped.\n"; }
    public function printRegistration(): void { echo "Registration printed.\n"; }
    public function logout(): void { echo "Student logged out.\n"; }
}

class EnrollCommand implements Command {
    public function __construct(private StudentSystem $system) {}
    public function execute(): void { $this->system->enroll(); }
}
class DropSubjectCommand implements Command {
    public function __construct(private StudentSystem $system) {}
    public function execute(): void { $this->system->dropSubject(); }
}
class PrintRegistrationCommand implements Command {
    public function __construct(private StudentSystem $system) {}
    public function execute(): void { $this->system->printRegistration(); }
}
class LogoutCommand implements Command {
    public function __construct(private StudentSystem $system) {}
    public function execute(): void { $this->system->logout(); }
}

class CommandInvoker {
    public function run(string $label, Command $command): void {
        echo "Executing: $label\n";
        $command->execute();
    }
}
