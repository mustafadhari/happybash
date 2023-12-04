<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Subcategory;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $eventsCategory = Category::where('name', 'Events')->first();

        Subcategory::create(['name' => 'Family Gathering', 'category_id' => $eventsCategory->id]);
        Subcategory::create(['name' => 'Birthday Party', 'category_id' => $eventsCategory->id]);
        Subcategory::create(['name' => 'Baby Shower', 'category_id' => $eventsCategory->id]);
        Subcategory::create(['name' => 'Bridal Shower', 'category_id' => $eventsCategory->id]);

        $foodCategory = Category::where('name', 'Food')->first();

        Subcategory::create(['name' => 'Popcorn', 'category_id' => $foodCategory->id]);
        Subcategory::create(['name' => 'Ice cream', 'category_id' => $foodCategory->id]);
        Subcategory::create(['name' => 'Burger', 'category_id' => $foodCategory->id]);
        Subcategory::create(['name' => 'Crepes & Waffles', 'category_id' => $foodCategory->id]);
        Subcategory::create(['name' => 'Saj', 'category_id' => $foodCategory->id]);
        Subcategory::create(['name' => 'Shawarma', 'category_id' => $foodCategory->id]);
        Subcategory::create(['name' => 'Shawarma', 'category_id' => $foodCategory->id]);
        Subcategory::create(['name' => 'Milk Shakes', 'category_id' => $foodCategory->id]);

        $activityCategory = Category::where('name', 'Activity')->first();

        Subcategory::create(['name' => 'Host', 'category_id' => $activityCategory->id]);
        Subcategory::create(['name' => 'Face painting', 'category_id' => $activityCategory->id]);
        Subcategory::create(['name' => 'Comedian', 'category_id' => $activityCategory->id]);
        Subcategory::create(['name' => 'Show', 'category_id' => $activityCategory->id]);
        Subcategory::create(['name' => 'Trampolines', 'category_id' => $activityCategory->id]);
        Subcategory::create(['name' => 'Arcades', 'category_id' => $activityCategory->id]);

        $snacksCategory = Category::where('name', 'Snacks')->first();

        Subcategory::create(['name' => 'Popcorn', 'category_id' => $snacksCategory->id]);
        Subcategory::create(['name' => 'Ice cream', 'category_id' => $snacksCategory->id]);
        Subcategory::create(['name' => 'Crepes & Waffles', 'category_id' => $snacksCategory->id]);
        Subcategory::create(['name' => 'Milk shakes', 'category_id' => $snacksCategory->id]);

        $showsCategory = Category::where('name', 'Shows')->first();

        Subcategory::create(['name' => 'Glow in the dark', 'category_id' => $showsCategory->id]);
        Subcategory::create(['name' => 'Dancing shows', 'category_id' => $showsCategory->id]);
        Subcategory::create(['name' => 'Magic show', 'category_id' => $showsCategory->id]);

        $DJCategory = Category::where('name', 'DJ')->first();

        Subcategory::create(['name' => 'DJ Chetas', 'category_id' => $DJCategory->id]);
        Subcategory::create(['name' => 'Yashraj Mukhate', 'category_id' => $DJCategory->id]);
        Subcategory::create(['name' => 'Nucleya', 'category_id' => $DJCategory->id]);

        $hostCategory = Category::where('name', 'Host')->first();

        Subcategory::create(['name' => 'Aayushmann Khurana', 'category_id' => $hostCategory->id]);
    }
}
