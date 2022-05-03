<?php

namespace Database\Seeders;

use App\Models\CustomerOrder;
use Illuminate\Database\Seeder;

class CustomerOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CustomerOrder::create([
            'cust_first_name' => 'Shen',
            'cust_last_name' => 'Brown',
            'address' => '123 Street Ave',
            'contact_phone' => '12345-98',
            'customer_email' => 'user_one@gmail.com'
        ]);
    }
}
