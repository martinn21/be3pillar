<?php

namespace App\Providers;

use App\Services\EmailService;
use Illuminate\Mail\Mailer;
use Illuminate\Support\ServiceProvider;

class EmailServiceServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $app = $this->app;
        $app->bind('App\Services\Contracts\EmailServiceInterface', function ($app) {
            /** @var Mailer $mail */
            $mail = $app->make('Illuminate\Mail\Mailer');
            return new EmailService($mail);
        });
    }
}
