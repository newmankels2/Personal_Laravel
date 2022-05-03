<?php

namespace Database\Seeders;

use App\Models\Booking;
use Illuminate\Database\Seeder;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Booking::create([
            'first_name' => 'Athony',
            'last_name' =>  'Blake',
            'email' => 'email@gmail.com',
            'mobile'=> '8765456567',
        ]);
    }
}
