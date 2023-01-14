<?php

namespace App\Repository;

use App\Models\User;

class UserRepository implements Contracts\UserRepositoryInterface
{

    /** @var User */
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function getAll()
    {
        //For now we don't worry about performance but we can chunk later
        return $this->user->select('id', 'name', 'email')->orderBy('name', 'asc')->get();
    }
}
