<?php
namespace Helmutb\App1;

use Illuminate\Support\Facades\Facade;

class App1Facade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'App1';
    }    
}