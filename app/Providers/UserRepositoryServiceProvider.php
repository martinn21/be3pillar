<?php

namespace App\Providers;

use App\Models\User;
use App\Repository\Contracts\UserRepositoryInterface;
use App\Repository\UserRepository;
use Illuminate\Support\ServiceProvider;

class UserRepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $app = $this->app;
        $app->bind('App\Repository\Contracts\UserRepositoryInterface', function ($app) {
            /** @var User $user */
            $user = $app->make('App\Models\User');
            return new UserRepository($user);
        });
    }
}
