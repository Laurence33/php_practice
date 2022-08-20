<?php

class Task
{
    protected $description;
    protected $completed = false;

    function getDescription()
    {
        return $this->description;
    }

    public function complete()
    {
        return $this->completed = true;
    }

    public function isComplete()
    {
        return $this->completed;
    }
}
