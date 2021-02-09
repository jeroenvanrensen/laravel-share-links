<?php

namespace JeroenvanRensen\ShareLinks;

use Illuminate\Support\Facades\Facade;

class Share extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'share';
    }
}
