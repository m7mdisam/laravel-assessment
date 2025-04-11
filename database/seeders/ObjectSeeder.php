<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ObjectSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('objects')->insert([
            [
                'name' => 'Dubai Branch',
                'type_id' => 1,
                'franchise_id' => null,
                'parent_id' => null
            ],
            [
                'name' => 'Morning Slot',
                'type_id' => 2,
                'franchise_id' => 1,
                'parent_id' => null
            ],
            [
                'name' => 'Mohamed Esam',
                'type_id' => 3,
                'franchise_id' => 1,
                'parent_id' => null
            ],
            [
                'name' => 'Ahmed Adil',
                'type_id' => 4,
                'franchise_id' => null,
                'parent_id' => 3
            ],
        ]);
    }
}
