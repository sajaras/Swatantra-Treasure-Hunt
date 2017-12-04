<?php

namespace Illuminate\Auth\Notifications;

use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class ResetPassword extends Notification
{
    /**
     * The password reset token.
     *
     * @var string
     */
    public $token;

    /**
     * Create a notification instance.
     *
     * @param  string  $token
     * @return void
     */
    public function __construct($token)
    {
        $this->token = $token;
    }

    /**
     * Get the notification's channels.
     *
     * @param  mixed  $notifiable
     * @return array|string
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Build the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
   public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line('Seems like you have Forgot your Password....No worries')
            ->line('Reset your Password using below Reset button')
            ->action('Reset Password', url(route('password.reset', $this->token, false)))
            ->line('If you did not request a password reset, no further action is required.')
            ->line('For any technical issues contact: swatantrahuntteam.space@gmail.com');
    }
}

