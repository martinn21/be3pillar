<?php

namespace App\Console\Commands;

use App\Services\Contracts\EmailServiceInterface;
use App\Services\Contracts\UserServiceInterface;
use Illuminate\Console\Command;
use Symfony\Component\Console\Command\Command as CommandAlias;

class PillarEmailCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:3pillar';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Used to send Emails at midnight';

    private EmailServiceInterface $emailService;

    private UserServiceInterface $userService;

    public function __construct(EmailServiceInterface $emailService, UserServiceInterface $userService)
    {
        parent::__construct();
        $this->emailService = $emailService;
        $this->userService = $userService;
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(): int
    {
        $users = $this->userService->getAll();
        foreach ($users as $user) {
            $this->emailService->send($user);
        }

        return CommandAlias::SUCCESS;
    }
}
