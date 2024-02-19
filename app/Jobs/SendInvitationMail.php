<?php

namespace App\Jobs;

use App\Mail\SendInvitation;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class SendInvitationMail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $email;
    public $username;
    public $password;

    /**
     * Create a new job instance.
     */
    public function __construct($email, $username, $password)
    {
        $this->email = $email;
        $this->username = $username;
        $this->password = $password;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        // Query Transaction if success Send Email

        DB::transaction(function () {
            // Update Password
            DB::table('users')->where('email', $this->email)->update([
                'password' => bcrypt($this->password),
            ]);
        });

        // Send Email
        Mail::to($this->email)->send(new SendInvitation($this->username, $this->password));
    }
}
