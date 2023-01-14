<?php

namespace App\Providers;

use App\Repository\UserRepository;
use App\Services\Contracts\UserServiceInterface;
use App\Services\UserService;
use Illuminate\Support\ServiceProvider;

class UserServiceServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $app = $this->app;
        $app->bind('App\Services\Contracts\UserServiceInterface', function ($app) {
            /** @var UserRepository $userRepository */
            $userRepository = $app->make('App\Repository\UserRepository');
            return new UserService($userRepository);
        });
    }
}
