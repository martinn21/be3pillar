<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\Contracts\UserServiceInterface;

class UserController extends Controller
{

    /** @var UserServiceInterface */
    private $userService;

    /**
     * @param UserServiceInterface $userService
     */
    public function __construct(UserServiceInterface $userService)
    {
        $this->userService = $userService;
    }

    public function getAll()
    {
        $users = $this->userService->getAll();
        return response()->json($users);
    }
}
