<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class DepositApprovalCancelled extends Notification
{
    use Queueable;

    public $deposit;

    /**
     * Create a new notification instance.
     */
    public function __construct($n)
    {
        //
        $this->deposit = $n;
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
            'admin.notifications.depositapprovelcancelled',
            [
                'name' => 'Hi, ' . $this->deposit->user->name . '!',
                'subject' => 'Deposit Approval Cancelled',
                'content' => $this->deposit->amount,
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
            'subject' => '<em class="ni ni-sign-kobo"></em>'. $this->deposit->amount.' Deposit Approval Cancelled',
            'action' => route('customer.dashboard')
        ];
    }
}
