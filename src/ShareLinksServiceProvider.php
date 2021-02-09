<?php

namespace JeroenvanRensen\ShareLinks;

use Illuminate\Support\ServiceProvider;

class ShareLinksServiceProvider extends ServiceProvider
{
    public function boot()
    {
        //
    }

    public function register()
    {
        $this->app->bind('share', function($app) {
            return new ShareFacade();
        });
    }
}
