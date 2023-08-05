<?php

namespace App\Notifications\Admin\Deposit;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class Deposit extends Notification
{
    use Queueable;

    public $deposit;

    /**
     * Create a new notification instance.
     */
    public function __construct($n)
    {
        $this->deposit = $n;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'subject' => $this->deposit->user->name.' made a deposit of <em class="ni ni-sign-kobo"></em>'. $this->deposit->amount.' that needs approval',
            'action' => route('customer.dashboard')
        ];
    }
}
