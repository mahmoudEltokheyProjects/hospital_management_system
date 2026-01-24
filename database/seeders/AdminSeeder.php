<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Disable foreign key checks to allow truncation
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('admins')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // Create multiple admin users
        $admins = [
            [
                'name' => 'admin',
                'email' => 'admin1@admin1.com',
                'password' => Hash::make('0123456789'),
                'phone' => '0123456789',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'admin2',
                'email' => 'admin2@admin2.com',
                'password' => Hash::make('0123456789'),
                'phone' => '0118376789',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // Option 1: Bulk insert
        DB::table('admins')->insert($admins);

        // Option 2 (alternative): Use create() in a loop
        // foreach ($admins as $data) {
        //     Admin::create($data);
        // }
    }
}
