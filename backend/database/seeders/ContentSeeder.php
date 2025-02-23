<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("contents")->insert([
            "text_banner" => "Jadilah <span class='text-yellow-300'>Tenant</span> pada <span class='text-red-400'>Event</span> Pilihanmu dengan <span class='text-green-400'>Mudah</span>, <span class='text-green-400'>Cepat</span>, dan <span class='text-green-400'>Terpercaya.</span>",
            "about" => "<p>Haventwined adalah platform pemesanan tenant inovatif yang dirancang untuk menyederhanakan manajemen acara bagi penyelenggara dan penyewa.</p><p>Didirikan pada tahun 2024, kami memiliki misi untuk mengubah cara pemesanan penyewa acara dikelola secara digital, dan kami ingin Anda menjadi bagian dari perjalanan kami!</p>",
        ]);
    }
}
