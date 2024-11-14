<?php
declare(strict_types=1);

class ServiceA
{
    private Logger $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
        $this->logger->log('ServiceA created');
    }

    public function doSomething(): void
    {
        $this->logger->log('ServiceA doing something');
    }
}