<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Lang;

class CustomerPasswordResetEmail extends Mailable
{
    use Queueable, SerializesModels;

    protected $token;
    protected $email;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($token, $email)
    {
        $this->token = $token;
        $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $url = route('premium.password.request', [
            'token' => $this->token,
            'email' => $this->email,
        ]);

        return $this->markdown('emails.customer_password_reset')
            ->subject('Reset Password Notification')
            ->with('url', $url);
            
    }
}
