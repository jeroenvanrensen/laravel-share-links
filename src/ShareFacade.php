<?php

namespace JeroenvanRensen\ShareLinks;

use Illuminate\Support\Facades\Facade;

class ShareFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'share';
    }
}
