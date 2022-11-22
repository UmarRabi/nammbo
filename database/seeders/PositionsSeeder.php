<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionsSeeder extends Seeder
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
                "title" => "State Chairman", "code" => "SC",  'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "title" => "Deputy state chairman", "code" => "DC",  'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "title" => "State Vice Chairman (North)", "code" => "SVN",  'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "title" => "4	State Vice Chairman (South)", "code" => "SVS",  'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "title" => "State Vice Chairman (Central)", "code" => "SVC",  'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "title" => "State Secretary", "code" => "SS",  'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "title" => "Deputy State Secretar", "code" => "DSS",  'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "title" => "State Organising Secretary", "code" => "SOS",  'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "title" => "Deputy State Organising Sec.", "code" => "DSOS",  'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "title" => "State Publicity Secretary ", "code" => "SPS",  'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "title" => "Deputy Publicity Secretary", "code" => "DPS",  'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "title" => "State Treasurer", "code" => "ST",  'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "title" => "Deputy State Treasurer", "code" => "DST",  'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "title" => "State Financial Secretary", "code" => "SFS",  'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "title" => "Deputy Financial Secretary", "code" => "DFS",  'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "title" => "State Auditor ", "code" => "SA",  'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "title" => "Deputy State Auditor", "code" => "DSA",  'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "title" => "State Woman Leader", "code" => "DWL",  'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "title" => "Deputy State Woman Leader", "code" => "DSWL",  'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "title" => "State Youth Leader", "code" => "SYL",  'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "title" => "Deputy State Youth Leader", "code" => "DSYL",  'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "title" => "State Legal Adviser", "code" => "SLA",  'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "title" => "Deputy State Legal Adviser", "code" => "DSLA",  'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "title" => "Political Adviser", "code" => "PA",  'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "title" => "Head Security and Strategies", "code" => "HSS",  'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "title" => "Deputy security", "code" => "DS",  'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "title" => "Head Strategies", "code" => "HS",  'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "title" => "Deputy Strategies", "code" => "SD",  'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "title" => "State Ex-Officio 1", "code" => "SEO1",  'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "title" => "State Ex-Officio 2", "code" => "30",  'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "title" => "State Ex-Officio 3", "code" => "SEO2",  'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "title" => "Leader PLWD", "code" => "LP",  'created_at' => now(),
                'updated_at' => now()
            ],
        ];
        DB::table('positions')->insert($states);
    }
}
