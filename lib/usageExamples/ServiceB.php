<?php
declare(strict_types=1);

class ServiceB
{
    private Logger $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
        $this->logger->log('ServiceB created');
    }

    public function doSomething(): void
    {
        $this->logger->log('ServiceB doing something');
    }
}