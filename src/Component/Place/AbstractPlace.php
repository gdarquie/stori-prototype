<?php

declare(strict_types=1);

namespace App\Component\Place;

abstract class AbstractPlace implements PlaceInterface
{
    protected $id;
    protected string $name;
    protected array $actors;

    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return array
     */
    public function getActors(): array
    {
        return $this->actors;
    }

    /**
     * @param array $actors
     */
    public function setActors(array $actors): void
    {
        $this->actors = $actors;
    }
}