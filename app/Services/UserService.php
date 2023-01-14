<?php

namespace App\Services;

use App\Repository\Contracts\UserRepositoryInterface;
use App\Repository\UserRepository;

class UserService implements Contracts\UserServiceInterface
{

    /** @var UserRepository */
    private $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function getAll()
    {
        return $this->userRepository->getAll();
    }
}
