<?php

class User
{
    public $id;
    public $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}
