<?php
namespace Kewo\Collector\Facades;

use Illuminate\Support\Facades\Facade;

class Collector extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'collector';
    }
}

?>