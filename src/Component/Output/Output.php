<?php

declare(strict_types=1);


namespace App\Component\Output;


class Output
{
    private array $contents = [];

    public function __construct(string $log)
    {
        $this->addContent($log);
    }

    public function addContent($content)
    {
        $this->contents[] = $content;
    }
}