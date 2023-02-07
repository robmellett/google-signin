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
        $providerName = str(GoogleSignInProvider::IDENTIFIER)->lower();

        $socialiteWasCalled->extendSocialite(
            $providerName,
            GoogleSignInProvider::class
        );
    }
}
