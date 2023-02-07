<?php

namespace AdoreBeauty\GoogleSignIn;

use SocialiteProviders\Manager\SocialiteWasCalled;

class GoogleSignInSocialite
{
    /**
     * Register the provider.
     *
     * @param  SocialiteWasCalled  $socialiteWasCalled
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite(
            'google'
            GoogleSignInProvider::class
        );
    }
}
