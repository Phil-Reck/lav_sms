<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('class_types')->delete();

        $data = [
            ['name' => 'Nursery', 'code' => 'Nur'],
            ['name' => 'Lower Primary', 'code' => 'LP'],
            ['name' => 'Upper Primary', 'code' => 'UP'],
            //['name' => 'Primary', 'code' => 'P'],
            // ['name' => 'Junior Secondary', 'code' => 'J'],
            // ['name' => 'Senior Secondary', 'code' => 'S'],
        ];

        DB::table('class_types')->insert($data);

    }
}
