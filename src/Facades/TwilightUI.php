<?php

namespace TwilightProjects\TwilightUI\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \TwilightProjects\TwilightUI\TwilightUI
 */
class TwilightUI extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \TwilightProjects\TwilightUI\TwilightUI::class;
    }
}
