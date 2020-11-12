<?php

namespace Juntals01\Phpass;

use Illuminate\Support\ServiceProvider;

class PhpassServiceProvider extends ServiceProvider
{
    public function boot()
    {
        
    }

    public function register()
    {
        $this->app->bind('PhpassHelper', function(){
            return new PhpassHelper();
        });
    }
}