<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Contracts\Role as ContractsRole;
use Spatie\Permission\Models\Role as ModelsRole;

class UserRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'username' => 'admin',
            'first_name' => 'Admin',
            'last_name' => 'Admin',
            'email' => 'admin@graffiti.com',
            'user_type' => 'admin',
            'email_verified_at' => now(),
            'password' => Hash::make('Admin@123'), // password
            'remember_token' => Str::random(10),
        ]);
        $cashier = User::create([
            'username' => 'cashier',
            'first_name' => 'Cashier',
            'last_name' => 'Cashier',
            'email' => 'cashier@graffiti.com',
            'user_type' => 'cashier',
            'email_verified_at' => now(),
            'password' => Hash::make('Cashier@123'), // password
            'remember_token' => Str::random(10),
        ]);
        $kitchen = User::create([
            'username' => 'kitchen',
            'first_name' => 'Kitchen',
            'last_name' => 'Kitchen',
            'email' => 'kitchen@graffiti.com',
            'user_type' => 'kitchen',
            'email_verified_at' => now(),
            'password' => Hash::make('Kitchen@123'), // password
            'remember_token' => Str::random(10),
        ]);

        $admin_role = ModelsRole::create([
            'name' => 'admin',
            'title' => 'Admin',
            'status' => 1,
        ]);
        $cashier_role = ModelsRole::create([
            'name' => 'cashier',
            'title' => 'Cashier',
            'status' => 1,
        ]);
        $kitchen_role = ModelsRole::create([
            'name' => 'kitchen',
            'title' => 'Kitchen',
            'status' => 1,
        ]);

        $admin->assignRole($admin_role);
        $cashier->assignRole($cashier_role);
        $kitchen->assignRole($kitchen_role);
    }
}
