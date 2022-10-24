<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $walking_customer = Customer::create([
            'name' => 'Walking Customer',
            'mobile' => '009641234567890',
            'email' => 'walking@graffiti.com',
            'state' => 'Basrah',
            'city' => 'Basrah',
            'zip_code' => '61028',
            'address' => 'Basrah, Iraq', // password
        ]);
    }
}
