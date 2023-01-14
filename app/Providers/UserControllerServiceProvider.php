<?php

namespace App\Providers;

use App\Http\Controllers\Api\UserController;
use App\Services\UserService;
use Illuminate\Support\ServiceProvider;

class UserControllerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $app = $this->app;
        $app->bind(UserController::class, function ($app) {
            /** @var UserService $userService */
            $userService = $app->make('App\Services\UserService');
            return new UserController($userService);
        });
    }
}
