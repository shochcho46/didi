<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class GigReview extends Notification
{
    use Queueable;

    protected $gigDetais,$setMessage;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($GigInstance,$message)
    {
        //
        $this->gigDetais = $GigInstance;
        $this->setMessage = $message;

    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
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
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }


    public function toDatabase($notifiable)
    {
        return [
            //
            'message'=> $this->setMessage,
            'eventname'=> "GiG",
            'user_id'=>  $this->gigDetais->user->id,
            'event_id'=>  $this->gigDetais->id,
        ];
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
