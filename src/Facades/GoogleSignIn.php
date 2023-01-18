<?php

namespace AdoreBeauty\GoogleSignIn\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AdoreBeauty\GoogleSignIn\GoogleSignIn
 */
class GoogleSignIn extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \AdoreBeauty\GoogleSignIn\Provider::class;
    }
}
