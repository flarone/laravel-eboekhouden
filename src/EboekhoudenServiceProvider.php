<?php

namespace Flarone\EBoekhouden;

use Illuminate\Support\ServiceProvider;
use Flarone\EBoekhouden\Client;

class EboekhoudenServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('eboekhouden', function () {
            // Create a new Client instance with the API key from .env file
            $user = env('EBOEKHOUDEN_USER_NAME');
            $code1 = env('EBOEKHOUDEN_SECURITY_CODE_1');
            $code2 = env('EBOEKHOUDEN_SECURITY_CODE_2');

            return new Client($user, $code1, $code2);
        });
    }
}
