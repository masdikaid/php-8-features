<?php

// old way
class Old 
{
    public string $name;
    public string $email;

    public function __construct(string $name, string $email)
    {
        $this->name = $name;
        $this->email = $email;

    }

}


// php 8 way
class NewWay
{
    // just add visibility in argument of constructor
    public function __construct(public string $name, public string $email)
    {
    }

}