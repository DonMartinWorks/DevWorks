<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewCandidate extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($id_vacancy, $vacancy_name, $user_id)
    {
        $this->id_vacancy = $id_vacancy;
        $this->vacancy_name = $vacancy_name;
        $this->user_id = $user_id;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via($notifiable)
    {
        return ['mail', 'database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail($notifiable): MailMessage
    {
        $url = url('/notifications/');

        return (new MailMessage)
            ->line(__('You have received a new candidate in your vacancy.'))
            ->line(__('The vacancy is:') . ' ' . $this->vacancy_name)
            ->action(__('See notification'), $url)
            ->line(__('Thank you for using our application!'));
    }

    /**
     * Almacena la notificacion a la DB.
     */
    public function toDatabase($notifiable)
    {
        return [
            'id_vacancy' => $this->id_vacancy,
            'vacancy_name' => $this->vacancy_name,
            'user_id' => $this->user_id
        ];
    }
}
