<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Location::create([
            'name' => 'Indonesia',
            'status' => 'ready'
        ]);

        Location::create([
            'name' => 'Istanbul',
            'status' => 'ready'
        ]);

        Location::create([
            'name' => 'Tokyo',
            'status' => 'soon'
        ]);

        Location::create([
            'name' => 'Seoul',
            'status' => 'soon'
        ]);
    }
}
