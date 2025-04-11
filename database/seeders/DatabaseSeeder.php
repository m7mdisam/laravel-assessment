<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Insert types first
        DB::table('object_types')->insert([
            ['name' => 'Franchise'],
            ['name' => 'Schedule'],
            ['name' => 'Parent'],
            ['name' => 'Student'],
        ]);

        // Then seed objects
        $this->call(ObjectSeeder::class);
    }
}
