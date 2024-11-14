<?php
declare(strict_types=1);

class Logger
{
    public function log(string $message): void
    {
        echo $message . PHP_EOL;
    }
}