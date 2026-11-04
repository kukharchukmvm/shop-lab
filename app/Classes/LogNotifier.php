<?php

namespace App\Classes;

use App\Interfaces\Notifier;
use App\Models\User;
use Illuminate\Support\Facades\Log;

class LogNotifier implements Notifier
{

    public function send(User $user, string $text) :bool
    {
        Log::channel("Notifier")->info("надсилаю користувачу[$user->id] повідомлення: $text");
        return true;
    }
}
