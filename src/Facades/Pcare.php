<?php

namespace Kangangga\Pcare\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Kangangga\Pcare\Pcare
 */
class Pcare extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'pcare';
    }
}
