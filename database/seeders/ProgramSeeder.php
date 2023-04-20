<?php

namespace Database\Seeders;

use App\Models\Program;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Program::create([
            'location_id' => 1,
            'name' => 'Data Science'
        ]);
        Program::create([
            'location_id' => 1,
            'name' => 'Digital Marketing'
        ]);
        Program::create([
            'location_id' => 2,
            'name' => 'Data Science'
        ]);
        Program::create([
            'location_id' => 2,
            'name' => 'Digital Marketing'
        ]);
        Program::create([
            'location_id' => 3,
            'name' => 'Data Science'
        ]);
        Program::create([
            'location_id' => 3,
            'name' => 'Digital Marketing'
        ]);
    }
}
