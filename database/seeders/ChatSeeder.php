<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chats')->insert([
            [
                'media_id' => 1,
                'speaker_id' => 1,
                'count' => 1,
                'text' => 'こんにちは、初めまして',
                'created_at' =>new DateTime(),
                'updated_at' =>new DateTime(),
            ],

            [
                'media_id' => 1,
                'speaker_id' => 2,
                'count' => 2,
                'text' => 'こんにちは、初めまして。なんか会話しよーや',
                'created_at' =>new DateTime(),
                'updated_at' =>new DateTime(),
            ],

            [
                'media_id' => 1,
                'speaker_id' => 1,
                'count' => 3,
                'text' => 'んーむり！さよならー',
                'created_at' =>new DateTime(),
                'updated_at' =>new DateTime(),
            ],
        ]);
    }
}
