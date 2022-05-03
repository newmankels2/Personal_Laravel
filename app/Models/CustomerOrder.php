<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class CustomerOrder extends Model
{
    use HasFactory;

    protected $fillable = [
    
        'cust_first_name',
        'cust_last_name',
        'address',
        'contact_phone',
        'customer_email',
    ];

    public function menus(): HasMany
    {
        return $this->hasMany(Menu::class, 'customer_order_id', 'id');
    }


    public function foodDelivery(): HasOne
    {
        return $this->hasOne(FoodDelivery::class, 'customer_order_id', 'id');
    }

    

}
