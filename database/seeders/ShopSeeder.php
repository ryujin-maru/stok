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
                'information' =>'<h2>記事を紹介しまう記事を紹介しまう</h2>
<p>記事を紹介しまう記事を紹介しまう記事を紹介しまう記事を紹介しまう記事を紹介しまう記事を紹介しまう記事を紹介しまう記事を紹介しまう記事を紹介しまう記事を紹介しまう記事を紹介しまう記事を紹介しまう記事を紹介しまう記事を紹介しまう記事を紹介しまう記事を紹介しまう記事を紹介しまう記事を紹介しまう</p><br><p>記事を紹介しまう記事を紹介しまう記事を紹介しまう</p><p>記事を紹介しまう記事を紹介しまう記事を紹介しまう</p>',
                'created_at' =>new DateTime(),
                'updated_at' =>new DateTime(),
            ],
            [
                'title' =>'猫可愛すぎ！',
                'image' => 'cat.jpg',
                'alt' => '猫ちゃん',
                'description' =>'これは猫です。',
                'information' =>'<h2>これは猫です。</h2>
<p>これは猫です。これは猫です。これは猫です。これは猫です。これは猫です。これは猫です。これは猫です。これは猫です。これは猫です。これは猫です。これは猫です。これは猫です。これは猫です。これは猫です。</p><br><p>記事を紹介しまう記事を紹介しまう記事を紹介しまう</p><p>記事を紹介しまう記事を紹介しまう記事を紹介しまう</p>
<h2>犬もワンチャンいい</h2>
<p>犬だけに。シベリアンはすきーーーーーーーーーーーーーーーーーーーーー</p>',
                'created_at' =>new DateTime(),
                'updated_at' =>new DateTime(),
            ],
            [
                'title' =>'りす',
                'image' => 'squirrel.jpg',
                'alt' =>'りすちゃん',
                'description' =>'これはりすです。',
                'information' =>'<h2>これは猫です。</h2>
<p>これは猫です。これは猫です。これは猫です。これは猫です。これは猫です。これは猫です。これは猫です。これは猫です。これは猫です。これは猫です。これは猫です。これは猫です。これは猫です。これは猫です。</p><br><p>記事を紹介しまう記事を紹介しまう記事を紹介しまう</p><p>記事を紹介しまう記事を紹介しまう記事を紹介しまう</p>
<h2>犬もワンチャンいい</h2>
<p>犬だけに。シベリアンはすきーーーーーーーーーーーーーーーーーーーーー</p>
<h2>りすすき？</h2>
<p>りすです</p>',
                'created_at' =>new DateTime(),
                'updated_at' =>new DateTime(),
            ],
        ]);
    }
}
