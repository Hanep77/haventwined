<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeroImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('banners')->insert([
            [
                "content_id" => 1,
                'image' => 'https://picsum.photos/1200/600',
            ],
            [
                "content_id" => 1,
                'image' => 'https://picsum.photos/1200/600',
            ],
            [
                "content_id" => 1,
                'image' => 'https://picsum.photos/1200/600',
            ],
            [
                "content_id" => 1,
                'image' => 'https://picsum.photos/1200/600',
            ],
            [
                "content_id" => 1,
                'image' => 'https://picsum.photos/1200/600',
            ],
            [
                "content_id" => 1,
                'image' => 'https://picsum.photos/1200/600',
            ]
        ]);
    }
}
