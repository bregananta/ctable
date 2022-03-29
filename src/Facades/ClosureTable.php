<?php

namespace Bregananta\ClosureTable\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Bregananta\ClosureTable\ClosureTable
 */
class ClosureTable extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'closure-table';
    }
}
