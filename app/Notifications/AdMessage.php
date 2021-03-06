<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class AdMessage extends Notification
{
    use Queueable;

    /**
     * The annonce.
     *
     * @var \App\Annonce
     */
    protected $annonce;

    /**
     * The message.
     *
     * @var String
     */
    protected $message;

    /**
     * The email.
     *
     * @var String
     */
    protected $email;

    /**
     * Create a new notification instance.
     *
     * @param \App\Models\Ad  $ad
     * @param String  $message
     * @param String  $email
     * @return void
     */
    public function __construct($annonce, $message, $email)
    {
        $this->annonce = $annonce;
        $this->message = $message;
        $this->email = $email;
    }

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
                    ->line('Vous avez reçu un message concernant une annonce que vous avez déposée :')
                    ->line('--------------------------------------')
                    ->line($this->message)
                    ->line('--------------------------------------')
                    ->action('Voir votre annonce', route('annonces.show', $this->annonce->id))
                    ->line("L'email de l'expéditeur est : " . $this->email)
                    ->line("Merci d'utiliser notre site pour vos annonces !");
    }

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
