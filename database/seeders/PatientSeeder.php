<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Disable foreign key checks to allow truncation
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('patients')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // Create multiple patient users
        $patients = [
            [
                'name' => 'patient1',
                'email' => 'patient1@patient1.com',
                'password' => Hash::make('0123456789'),
                'phone' => '0123456789',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'patient2',
                'email' => 'patient2@patient2.com',
                'password' => Hash::make('0123456789'),
                'phone' => '0118376789',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        // Option 1: Bulk insert
        DB::table('patients')->insert($patients);
    }

}
