<?php
include 'Observer.php';

class Researcher implements Observer
{
    private string $name;

    private Penguin $penguin;

    public function update()
    {
        echo 'The Researcher ' . $this->name . ' sees that the penguin is ' . $this->penguin->getAction() .'<br />';
    }

    public function initResearcher(Penguin $penguin, string $name)
    {
        $this->name = $name;
        $this->penguin = $penguin;

        $this->penguin->attachObserver($this);
    }
}