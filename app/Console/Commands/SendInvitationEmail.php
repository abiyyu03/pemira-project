<?php

namespace App\Console\Commands;

use App\Jobs\SendInvitationMail;
use App\Mail\SendInvitation;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Mail;

class SendInvitationEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:invitation-email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send invitation email to all users who have not voted yet.';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        // Get All User Who Have Not Voted Yet From Database where password is null
        $users = User::whereNull('password')->limit(500)->get();

        // Get username and password
        foreach ($users as $user) {
            $username = $user->nim;
            $password = GenerateRandomString(10);
            $email = $user->email;

            // Send email to user
            SendInvitationMail::dispatch($email, $username, $password);
        }

        $this->info('Invitation email sent successfully!');
    }
}
