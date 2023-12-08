<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $locations = [
            ['name' => 'Abdullah Al Salem'],
            ['name' => 'Adailiya'],
            ['name' => 'AlNahda'],
            ['name' => 'AlRai'],
            ['name' => 'Bnaid Al Qar'],
            ['name' => 'South Camps'],
            ['name' => 'Al Bedae'],
            // Add as many locations as needed
        ];

        DB::table('locations')->insert($locations);
    }
}
