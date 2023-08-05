<?php

namespace App\Notifications\Admin\Withdrawal;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class Withdrawal extends Notification
{
    use Queueable;

    public $withdraw;

    /**
     * Create a new notification instance.
     */
    public function __construct($n)
    {
        $this->withdraw = $n;
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
            'subject' => $this->withdraw->user->name.' made a withdrawal of <em class="ni ni-sign-kobo"></em>'. $this->withdraw->amount.' that needs approval',
            'action' => route('admin.withdraw.list')
        ];
    }
}
