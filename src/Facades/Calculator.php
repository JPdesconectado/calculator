<?php

namespace IMC\Calculator\Facades;

use Illuminate\Support\Facades\Facade;

class Calculator extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'calculator';
    }
}
