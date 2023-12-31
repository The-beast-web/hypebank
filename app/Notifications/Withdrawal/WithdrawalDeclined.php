<?php

namespace App\Notifications\Withdrawal;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class WithdrawalDeclined extends Notification
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
        return ['mail', 'database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)->view(
            'admin.notifications.withdrawal.withdrawal-declined',
            [
                'name' => 'Hi, ' . $this->withdraw->user->name . '!',
                'subject' => 'Withdrawal Declined',
                'content' => $this->withdraw->amount,
                'action' => route('customer.dashboard')

            ]
        );
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'subject' => '<em class="ni ni-sign-kobo"></em>'. $this->withdraw->amount.' Withdrawal Declined',
            'action' => route('customer.dashboard')
        ];
    }
}
