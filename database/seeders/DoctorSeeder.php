<?php

namespace Database\Seeders;

use App\Models\Doctor\Doctor;
use App\Models\Doctor\DoctorTranslation;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Disable foreign key checks to allow truncation
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Doctor::truncate();
        DoctorTranslation::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // ++++++++++++++++++ doctors ++++++++++++++++++
        $doctors = [
            // ======== 1- doctor1 ========
            [
                'email' => "doctor1@doctor1.com",
                'email_verified_at' => now(),
                // ++++++++++++++ password ==> "0123456789" ++++++++++++++
                'password' => Hash::make('0123456789'),
                'phone' => '0123456789',
                'price' => Arr::random([100, 200, 300, 400, 500]),
                'translations' => [
                    'en' => [
                        'name' => 'Ahmed',
                        'appointments' => 'Wednesday',
                    ],
                    'ar' => [
                        'name' => 'احمد',
                        'appointments' => 'الأربعاء',
                    ],
                ],
            ],
            // ======== 2- doctor2 ========
            [
                'email' => "doctor2@doctor2.com",
                'email_verified_at' => now(),
                // ++++++++++++++ password ==> "0123456789" ++++++++++++++
                'password' => Hash::make('0123456789'),
                'phone' => '0123456789',
                'price' => Arr::random([100, 200, 300, 400, 500]),
                'translations' => [
                    'en' => [
                        'name' => 'Mohamed',
                        'appointments' => 'Monday',
                    ],
                    'ar' => [
                        'name' => 'محمد',
                        'appointments' => 'الاثنين',
                    ],
                ],
            ],
        ];

        foreach ($doctors as $data)
        {
            $doctor = Doctor::create([
                'email' => $data['email'],
                'email_verified_at' => $data['email_verified_at'],
                'password' => $data['password'],
                'phone' => $data['phone'],
                'price' => $data['price'],
            ]);
            foreach ($data['translations'] as $locale => $translation) {
                $doctor->translateOrNew($locale)->name = $translation['name'];
                $doctor->translateOrNew($locale)->appointments = $translation['appointments'];
            }
            $doctor->save();
        }
    }
}
