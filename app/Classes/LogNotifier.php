<?php

namespace App\Classes;

use App\Interfaces\Notifier;
use App\Models\User;
use Illuminate\Support\Facades\Log;

class LogNotifier implements Notifier
{

    public function send(User $user, string $text) :bool
    {
        Log::channel("notifier")->info("надсилаю користувачу[$user->id] повідомлення: $text");
        Log::info();
        return true;
    }
}
