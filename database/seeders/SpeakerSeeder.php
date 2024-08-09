<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpeakerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('speakers')->insert([
            [
                'name' => 'リ・リ・リ',
                'image' => 'animal.jpg',
                'created_at' =>new DateTime(),
                'updated_at' =>new DateTime(),
            ],
            [
                'name' => '48歳（男性）',
                'image' => 'cat.jpg',
                'created_at' =>new DateTime(),
                'updated_at' =>new DateTime(),
            ],
        ]);
    }
}
