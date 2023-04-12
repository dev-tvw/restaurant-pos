<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
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
        // $admin_user = User::where('email', 'admin@graffiti.com')->first();
        // if (!$admin_user) {
        //     $admin = User::create([
        //         'username' => 'admin',
        //         'first_name' => 'Admin',
        //         'last_name' => 'Admin',
        //         'email' => 'admin@graffiti.com',
        //         'user_type' => 'admin',
        //         'email_verified_at' => now(),
        //         'password' => Hash::make('Admin@123'), // password
        //         'remember_token' => Str::random(10),
        //     ]);
        // }
        // $cashier_user = User::where('email', 'cashier@graffiti.com')->first();
        // if (!$cashier_user) {
        //     $cashier = User::create([
        //         'username' => 'cashier',
        //         'first_name' => 'Cashier',
        //         'last_name' => 'Cashier',
        //         'email' => 'cashier@graffiti.com',
        //         'user_type' => 'cashier',
        //         'email_verified_at' => now(),
        //         'password' => Hash::make('Cashier@123'), // password
        //         'remember_token' => Str::random(10),
        //     ]);
        // }
        // $cashier1_user = User::where('email', 'cashier1@graffiti.com')->first();
        // if (!$cashier1_user) {
        //     $cashier1 = User::create([
        //         'username' => 'cashier1',
        //         'first_name' => 'Cashier',
        //         'last_name' => '1',
        //         'email' => 'cashier1@graffiti.com',
        //         'user_type' => 'cashier',
        //         'email_verified_at' => now(),
        //         'password' => Hash::make('Cashier@123'), // password
        //         'remember_token' => Str::random(10),
        //     ]);
        // }
        // $cashier2_user = User::where('email', 'cashier2@graffiti.com')->first();
        // if (!$cashier2_user) {
        //     $cashier2 = User::create([
        //         'username' => 'cashier2',
        //         'first_name' => 'Cashier',
        //         'last_name' => '2',
        //         'email' => 'cashier2@graffiti.com',
        //         'user_type' => 'cashier',
        //         'email_verified_at' => now(),
        //         'password' => Hash::make('Cashier@123'), // password
        //         'remember_token' => Str::random(10),
        //     ]);
        // }
        // $kitchen_user = User::where('email', 'kitchen@graffiti.com')->first();
        // if (!$kitchen_user) {
        //     $kitchen = User::create([
        //         'username' => 'kitchen',
        //         'first_name' => 'Kitchen',
        //         'last_name' => 'Kitchen',
        //         'email' => 'kitchen@graffiti.com',
        //         'user_type' => 'kitchen',
        //         'email_verified_at' => now(),
        //         'password' => Hash::make('Kitchen@123'), // password
        //         'remember_token' => Str::random(10),
        //     ]);
        // }
        // $model_admin_role = ModelsRole::where('name', 'admin')->first();
        // if (!$model_admin_role) {
        //     $admin_role = ModelsRole::create([
        //         'name' => 'admin',
        //         'title' => 'Admin',
        //         'status' => 1,
        //     ]);
        // }
        // $model_cashier_role = ModelsRole::where('name', 'cashier')->first();
        // if (!$model_cashier_role) {
        //     $cashier_role = ModelsRole::create([
        //         'name' => 'cashier',
        //         'title' => 'Cashier',
        //         'status' => 1,
        //     ]);
        // }
        // $model_kitchen_role = ModelsRole::where('name', 'kitchen')->first();
        // if (!$model_kitchen_role) {
        //     $kitchen_role = ModelsRole::create([
        //         'name' => 'kitchen',
        //         'title' => 'Kitchen',
        //         'status' => 1,
        //     ]);
        // }

        $agency_user = User::where('email', 'Agency@graffiti.com')->first();
        if (!$agency_user) {
            $agency = User::create([
                'username' => 'Agency',
                'first_name' => 'Agency',
                'last_name' => 'Agency',
                'email' => 'Agency@graffiti.com',
                'user_type' => 'agency',
                'email_verified_at' => now(),
                'password' => Hash::make('Agency@123'), // password
                'remember_token' => Str::random(10),
            ]);
        }
        $model_agency_role = ModelsRole::where('name', 'agency')->first();
        if (!$model_agency_role) {
            $agency_role = ModelsRole::create([
                'name' => 'agency',
                'title' => 'agency',
                'status' => 1,
            ]);
        }
        // if (!$admin_user) {
        //     $admin->assignRole($admin_role);
        // }
        // if (!$cashier_user) {
        //     $cashier->assignRole($cashier_role);
        // }
        // if (!$cashier1_user) {
        //     if(!$model_cashier_role) {
        //         $cashier1->assignRole($cashier_role);
        //     } else {
        //         $cashier1->assignRole($model_cashier_role);
        //     }
        // }
        // if (!$cashier2_user) {
        //     if(!$model_cashier_role) {
        //         $cashier2->assignRole($cashier_role);
        //     } else {
        //         $cashier2->assignRole($model_cashier_role);
        //     }
        // }
        // if (!$kitchen_user) {
        //     $kitchen->assignRole($kitchen_role);
        // }

        if (!$agency_user) {
            $agency->assignRole($agency_role);
        }
    }
}
