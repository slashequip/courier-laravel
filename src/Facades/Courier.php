<?php

namespace Slashequip\CourierLaravel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Slashequip\CourierLaravel\CourierLaravel
 */
class Courier extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'courier';
    }
}
