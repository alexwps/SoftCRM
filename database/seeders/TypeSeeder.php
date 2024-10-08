<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            ['name' => 'Presencial'],
            ['name' => 'Remoto'],
            ['name' => 'Híbrido'],
        ];

        DB::table('types')->insert($types);
    }
}
