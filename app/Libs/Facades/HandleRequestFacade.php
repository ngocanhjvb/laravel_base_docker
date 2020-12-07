<?php
namespace App\Libs\Facades;

use Illuminate\Support\Facades\Facade;

class HandleRequestFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'handle_request';
    }
}
