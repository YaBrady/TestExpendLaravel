<?php
/**
 * Created by PhpStorm.
 * User: Ya Brady
 * Date: 2018/11/13
 * Time: 21:06
 */

namespace YaBrady\Packagetest;

use Illuminate\Contracts\Config\Repository;
use Illuminate\Session\SessionManager;

class Packagetest
{
    protected $session;
    protected $config;

    public function __construct($app) {
        $this->session = $app['session'];
        $this->config = $app['config'];
    }

    public function test_rtn($msg = '')
    {
        $config_arr = config('packagetest.options');
        dump($config_arr);
        return $msg.'from your custom develop package';
    }
}