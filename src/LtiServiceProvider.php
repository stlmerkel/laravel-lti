<?php

namespace Stlmerkel\LaravelLTI;

use Illuminate\Support\ServiceProvider;

class LtiServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(LtiWrapper::class, function () {
            return new LtiWrapper();
        });
    }

    public function boot()
    {
        // Boot logic if needed (e.g., publishing config/routes)
    }
}