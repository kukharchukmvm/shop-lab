<?php

namespace App\Models;

use App\Enums\OrderStatus;
use Illuminate\Database\Eloquent\Casts\AsEnumCollection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'status'
    ];

    protected function casts(): array
    {
        return [
            'status' => OrderStatus::class,

        ];
    }

    public function items(): HasMany {
        return $this->hasMany(OrderItem::class);
    }
}
