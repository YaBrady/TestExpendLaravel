<?php
namespace  YaBrady\Packagetest\Facades;
use Illuminate\Support\Facades\Facade;

/**
 * Created by PhpStorm.
 * User: Ya Brady
 * Date: 2018/11/13
 * Time: 21:12
 */

class Pat extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'packagetest';
    }
}