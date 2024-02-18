<?php

namespace App\Console\Commands;

use App\Jobs\SendInvitationMail;
use App\Mail\SendInvitation;
use Illuminate\Console\Command;
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
        $emails = [];

        // Append 3 mail to 100 emails
        for ($i = 0; $i < 33; $i++) {
            array_push($emails, 'anotheriyyu29@gmail.com', 'prncyash127@gmail.com', 'asnurgames12@gmail.com');
        }

        // Send email
        foreach ($emails as $email) {
            SendInvitationMail::dispatch($email);
        }

        // Mail::to('asnurgames12@gmail.com')->send(new SendInvitation());

        $this->info('Invitation email sent successfully!');
    }
}
