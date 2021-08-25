<?php
include 'Subject.php';

class Penguin implements Subject
{
    private string $action;

    private array $observerList = [];

    public function attachObserver(Observer $observer): void
    {
        array_push($this->observerList, $observer);
    }

    public function detachObserver(Observer $observer): void
    {
        foreach ($this->observerList as $key => $value) {
            if ($key === $observer) {
                unset($value);
            }
        }
    }

    public function notifyObserver(): void
    {
        foreach ($this->observerList as $observerList) {
            $observerList->update();
        }
    }

    public function getAction(): string
    {
        return $this->action;
    }

    public function setAction(string $action): void
    {
        $this->action = $action;

        $this->notifyObserver();
    }
}