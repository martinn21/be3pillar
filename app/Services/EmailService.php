<?php

namespace App\Services;

use App\Mail\PillarEmail;
use App\Models\User;
use App\Services\Contracts\EmailServiceInterface;
use App\Services\Contracts\UserServiceInterface;
use Illuminate\Mail\Mailer;

class EmailService implements EmailServiceInterface
{
    /** @var Mailer */
    private Mailer $email;

    public function __construct(Mailer $email)
    {
        $this->email = $email;
    }

    public function send(User $user)
    {
        $this->email->to($user->email)->send(new PillarEmail($user->user));
    }
}
