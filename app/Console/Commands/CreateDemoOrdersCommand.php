<?php

namespace App\Console\Commands;

use App\Interfaces\Notifier;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;
use Database\Factories\OrderFactory;
use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;

#[Signature('app:create-demo-orders-command')]
#[Description('Creating fake orders')]
class CreateDemoOrdersCommand extends Command
{

    protected $signature = 'order:demo {count}';

    public function handle(Notifier $notifier)
    {
        $count =(int) $this->argument('count');
        if ($count < 1) {
            $this->warn("Замовлень не може бути менше 1");
            return;
        }

        Order::factory()->has(OrderItem::factory()->count(5))
            ->afterCreating(function (Order $order) use ($notifier) {
                $notifier->send($order->user, "успішно оформлене замовлення");
            })
            ->count($count)->create();
    }
}
