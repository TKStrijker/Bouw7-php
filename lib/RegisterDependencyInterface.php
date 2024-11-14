<?php

namespace php;

interface RegisterDependencyInterface {
    // TODO define inputs, type hint
    public function register($dependency, $class);
}