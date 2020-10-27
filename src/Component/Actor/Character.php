<?php

declare(strict_types=1);

namespace App\Component\Actor;

class Character extends AbstractActor
{
    protected string $firstname;
    protected string $lastname;

    public function __construct(string $firstname, string $lastname)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }

    public function getFullName()
    {
        return $this->firstname . ' ' . $this->lastname;
    }
}