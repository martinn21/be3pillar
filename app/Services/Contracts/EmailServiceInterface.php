<?php

namespace App\Services\Contracts;

use App\Models\User;

interface EmailServiceInterface
{

    public function send(User $user);
}
