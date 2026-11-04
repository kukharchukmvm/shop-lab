<?php

namespace App\Classes;

use App\Interfaces\Notifier;
use App\Models\User;

class TelegramNotifier implements Notifier
{

    public function send(User $user, string $text): bool
    {
        // TODO: Implement notify() method.
        return false;
    }
}
