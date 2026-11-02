<?php
class StudentRequest {
    public function __construct(public string $type) {}
}

abstract class Handler {
    private ?Handler $next = null;

    public function setNext(Handler $handler): Handler {
        $this->next = $handler;
        return $handler;
    }

    public function handle(StudentRequest $request): void {
        if ($this->canHandle($request)) {
            echo static::class . ": Processing {$request->type}...\n";
        } else {
            echo static::class . ": Cannot process request.\n";
            if ($this->next) {
                $this->next->handle($request);
            } else {
                echo "No office can process this request.\n";
            }
        }
    }

    abstract protected function canHandle(StudentRequest $request): bool;
}

class StudentAffairsHandler extends Handler {
    protected function canHandle(StudentRequest $request): bool {
        return $request->type === 'Good Moral Certificate';
    }
}
class RegistrarHandler extends Handler {
    protected function canHandle(StudentRequest $request): bool {
        return in_array($request->type, ['Certificate of Enrollment', 'Transcript of Records'], true);
    }
}
class FinanceHandler extends Handler {
    protected function canHandle(StudentRequest $request): bool {
        return $request->type === 'Payment Concern';
    }
}
class ICTHandler extends Handler {
    protected function canHandle(StudentRequest $request): bool {
        return $request->type === 'Student ID Concern';
    }
}
