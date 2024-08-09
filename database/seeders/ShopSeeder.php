<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('media')->insert([
            [
                'title' =>'確認テスト！オフィス紹介します！',
                'image' => 'animal.jpg',
                'alt' => 'キリンちゃん',
                'description' =>'記事を紹介しまう記事を紹介しまう',
                'created_at' =>new DateTime(),
                'updated_at' =>new DateTime(),
            ],
            [
                'title' =>'猫可愛すぎ！',
                'image' => 'cat.jpg',
                'alt' => '猫ちゃん',
                'description' =>'これは猫です。',
                'created_at' =>new DateTime(),
                'updated_at' =>new DateTime(),
            ],
            [
                'title' =>'りす',
                'image' => 'squirrel.jpg',
                'alt' =>'りすちゃん',
                'description' =>'これはりすです。',
                'created_at' =>new DateTime(),
                'updated_at' =>new DateTime(),
            ],
        ]);
    }
}
