<?php

namespace Jeylabs\TCPDI\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class PowertoolzSdk
 * @package Jeylabs\PowertoolzSupportSdk\Facades
 */
class TCPDI extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'tcpdi';
    }
}