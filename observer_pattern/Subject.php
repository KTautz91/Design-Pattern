<?php


interface Subject
{
    public function attachObserver(Observer $observer): void;

    public function detachObserver(Observer $observer): void;

    public function notifyObserver(): void;
}