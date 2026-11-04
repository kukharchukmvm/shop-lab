<?php

namespace App\Interfaces;


use App\Models\User;

Interface Notifier
{
    public function send(User $user, string $text): bool;
}
