<?php

namespace Stlmerkel\LaravelLTI;

use LTI\ToolProvider\ToolProvider;

class LtiWrapper
{
    protected ToolProvider $provider;

    public function __construct()
    {
        $this->provider = new ToolProvider();
    }

    public function handleRequest(): void
    {
        $this->provider->handleRequest();
    }
}