<?php

use php\CompileDependencyInterface;
use php\GetDependencyInterface;
use php\RegisterDependencyInterface;

class Container implements RegisterDependencyInterface, CompileDependencyInterface, GetDependencyInterface {

    protected array $dependencies = [];

    public function register($dependency, $class)
    {
        $this->dependencies[$dependency] = $dependency;
    }

    public function compile()
    {
        
    }

    public function get($dependency)
    {
        if(!isset($this->dependencies[$dependency])) {
            throw new Exception("Unregistered dependency.");
        }

        return $this->resolveDependency($this->dependencies[$dependency]);
    }

    private function resolveDependency(object $dependency)
    {
        $reflection = new ReflectionClass($dependency);
        
        return $reflection->newInstance();
    }
}