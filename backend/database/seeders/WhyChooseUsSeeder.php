<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WhyChooseUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("why_choose_us")->insert([
            [
                "content_id" => 1,
                "title" => "Mudah & Cepat",
                "description" => "Proses pemesanan tenant dalam hitungan menit."
            ],
            [
                "content_id" => 1,
                "title" => "Transparan",
                "description" => "Harga dan detail tenant terlihat jelas."
            ],
            [
                "content_id" => 1,
                "title" => "Dikelola Secara Digital",
                "description" => "Kurangi proses manual yang rumit."
            ],
            [
                "content_id" => 1,
                "title" => "Fleksibel",
                "description" => "Cocok untuk event besar maupun kecil."
            ],
        ]);
    }
}
