<?php

namespace ShoutLara\DemoTwo\Facades;
use Illuminate\Support\Facades\Facade;

/**
 * Class ShoppingCartFacade
 * @package LaraShout\ShoppingCart
 */
class DemoTwoFacade extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'demotwo';
    }
}