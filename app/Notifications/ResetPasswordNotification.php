<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ResetPasswordNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    protected $token;

    public function __construct($token)
    {
        $this->token = $token;
    }

    /* protected $token,$resetUrl;

    public function __construct($token)
    {
        $this->token = $token;
        $this->resetUrl = url(config('app.url').route('password.reset', $this->token, false));
    } */

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Demande de réinitialisation du mot de passe')
            ->line('Vous recevez cet e-mail car nous avons reçu une demande de réinitialisation de mot de passe de votre part.')
            /* ->line('<img src="' . public_path('public/metronic/dist/assets/media/logos/logo.png') . '" alt="Logo" width="100" height="100">') */
            ->action('Cliquez sur ce boutton', url(config('app.url').route('password.reset', $this->token, false)))
            ->salutation('Cordialement, ' . config('app.name'));
    }
    /* public function toMail($notifiable)
    {
        return (new MailMessage)
            ->view('emails.reset-password-email', ['resetUrl' => $this->resetUrl])
            ->subject('Réinitialisation du mot de passe');

    } */

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
