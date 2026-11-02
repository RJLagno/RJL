<?php
interface Observer {
    public function update(float $grade): void;
}

class GradeSystem {
    private array $observers = [];

    public function attach(Observer $observer): void {
        $this->observers[] = $observer;
    }

    public function setGrade(float $grade): void {
        echo "Grade updated: $grade\n";
        foreach ($this->observers as $observer) {
            $observer->update($grade);
        }
    }
}

class StudentPortal implements Observer {
    public function update(float $grade): void {
        echo "Student Portal:\nNew grade posted.\n";
    }
}
class EmailNotification implements Observer {
    public function update(float $grade): void {
        echo "Email Notification:\nYour grade has been updated.\n";
    }
}
class ParentNotification implements Observer {
    public function update(float $grade): void {
        echo "Parent Notification:\nStudent grade has been posted.\n";
    }
}
