<?php

namespace Uzzaircode\Math;

use Illuminate\Support\Facades\Facade;


class MathFacade extends Facade{
    protected static function getFacadeAccessor()
    {
        return 'math';
    }
}