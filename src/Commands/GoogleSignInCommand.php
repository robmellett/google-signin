<?php

namespace AdoreBeauty\GoogleSignIn\Commands;

use Illuminate\Console\Command;

class GoogleSignInCommand extends Command
{
    public $signature = 'google-signin';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
