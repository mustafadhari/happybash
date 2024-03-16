<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Event::create(['title' => 'Bridal Shower']);
        Event::create(['title' => 'Birthday Party']);
        Event::create(['title' => 'Baby Shower']);
        Event::create(['title' => 'Family gathering']);
        Event::create(['title' => 'Bachelors Party']);
        Event::create(['description' => 'Bridal Shower']);
        Event::create(['description' => 'Birthday Party']);
        Event::create(['description' => 'Baby Shower']);
        Event::create(['description' => 'Family gathering']);
        Event::create(['description' => 'Bachelors Party']);
    }
}
