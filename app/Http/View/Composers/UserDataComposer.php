<?php

namespace App\Http\View\Composers;

use Illuminate\Support\Facades\Auth;
use illuminate\View\View;

class UserDataComposer
{
    public function __construct()
    {
    }

    public function compose(View $view)
    {
        $user = Auth::user();

        $unread_count = $user->unreadNotifications()->count();

        $notifications = $user->notifications; 
        
        $view->with([
            'notifications' => $notifications,
            'unread_count' => $unread_count
        ]);

    }
}
