<?php

namespace App\Providers;

use App\Console\Commands\PillarEmailCommand;
use App\Services\EmailService;
use App\Services\UserService;
use Illuminate\Support\ServiceProvider;

class PillarEmailCommandServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $app = $this->app;
        $app->bind(PillarEmailCommand::class, function ($app) {
            /** @var EmailService $emailService */
            $emailService = $app->make('App\Services\EmailService');
            /** @var UserService $userService */
            $userService = $app->make('App\Services\UserService');
            return new PillarEmailCommand($emailService, $userService);
        });
    }
}
