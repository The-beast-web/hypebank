<?php

namespace App\Notifications\Withdrawal;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class WithdrawalApproved extends Notification
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
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)->view(
            'admin.notifications.withdrawal.withdrawal-appoved',
            [
                'name' => 'Hi, ' . $this->withdraw->user->name . '!',
                'subject' => 'Withdrawal Approval',
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
            //
        ];
    }
}
