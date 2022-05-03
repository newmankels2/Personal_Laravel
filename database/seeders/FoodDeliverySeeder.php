<?php

namespace Database\Seeders;

use App\Models\CustomerOrder;
use App\Models\FoodDelivery;
use Illuminate\Database\Seeder;

class FoodDeliverySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FoodDelivery::create([
            'customer_order_id' => CustomerOrder::all()->random()->id,
            'order_time' => '9:40',
            'estimated_delivery_time' => '10:30',
            'food_ready' => 'processing',
            'actual_delivery_time' => '10:25',
            'delivery_address' => 'xyz street'
        ]);
    }
}
