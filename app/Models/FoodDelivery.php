<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FoodDelivery extends Model
{
    use HasFactory;
    protected $fillable = [
     
        'customer_order_id',
        'order_time',
        'estimated_delivery_time',
        'food_ready',
        'actually_delivery_time',
        'delivery_address',
    ];

    public function customerOrder(): BelongsTo
    {
        return $this->belongsTo(CustomerOrder::class, 'customer_order_id', 'id');
    }
}
     
