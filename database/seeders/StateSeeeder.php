<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateSeeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $states = [
            [
                "name" => "Abia", "code" => "01",  'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "name" => "Adamawa", "code" => "02",  'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "name" => "Akwa Ibom", "code" => "03",  'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "name" => "Anambra", "code" => "04",  'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "name" => "Bauchi", "code" => "05",  'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "name" => "Bayelsa", "code" => "06",  'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "name" => "Benue", "code" => "07",  'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "name" => "Borno", "code" => "08",  'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "name" => "Cross River", "code" => "09",  'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "name" => "Delta", "code" => "10",  'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "name" => "Ebonyi", "code" => "11",  'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "name" => "Edo", "code" => "12",  'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "name" => "Ekiti", "code" => "13",  'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "name" => "Enugu", "code" => "14",  'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "name" => "FCT - Abuja", "code" => "15",  'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "name" => "Gombe", "code" => "16",  'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "name" => "Imo", "code" => "17",  'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "name" => "Jigawa", "code" => "18",  'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "name" => "Kaduna", "code" => "19",  'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "name" => "Kano", "code" => "20",  'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "name" => "Katsina", "code" => "21",  'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "name" => "Kebbi", "code" => "22",  'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "name" => "Kogi", "code" => "23",  'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "name" => "Kwara", "code" => "24",  'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "name" => "Lagos", "code" => "25",  'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "name" => "Nasarawa", "code" => "26",  'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "name" => "Niger", "code" => "27",  'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "name" => "Ogun", "code" => "28",  'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "name" => "Ondo", "code" => "29",  'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "name" => "Osun", "code" => "30",  'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "name" => "Oyo", "code" => "31",  'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "name" => "Plateau", "code" => "32",  'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "name" => "Rivers", "code" => "33",  'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "name" => "Sokoto", "code" => "34",  'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "name" => "Taraba", "code" => "35",  'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "name" => "Yobe", "code" => "36",  'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "name" => "Zamfara", "code" => "37",  'created_at' => now(),
                'updated_at' => now()
            ]
        ];
        DB::table('states')->insert($states);
    }
}
