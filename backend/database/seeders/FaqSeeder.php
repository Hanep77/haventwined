<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("faqs")->insert([
            [
                "content_id" => 1,
                "question" => "Bagaimana cara memesan tenant untuk acara saya?",
                "answer" => "Anda bisa mencari dan memilih tenant melalui platform Haventwined, lalu melakukan pemesanan secara langsung."
            ],
            [
                "content_id" => 1,
                "question" => "Apakah ada biaya tambahan untuk menggunakan Haventwined?",
                "answer" => "Tidak, Haventwined gratis untuk digunakan oleh penyelenggara dan tenant. Namun, beberapa fitur premium mungkin tersedia di masa depan."
            ],
            [
                "content_id" => 1,
                "question" => "Bagaimana jika tenant yang saya pesan membatalkan di menit terakhir?",
                "answer" => "Kami menyarankan untuk selalu berkomunikasi dengan tenant. Jika terjadi pembatalan, Anda bisa mencari alternatif tenant melalui platform kami."
            ],
            [
                "content_id" => 1,
                "question" => "Apakah saya bisa mengubah atau membatalkan pesanan tenant?",
                "answer" => "Ya, Anda bisa mengelola pemesanan melalui dashboard admin Anda."
            ],
            [
                "content_id" => 1,
                "question" => "Bagaimana cara menghubungi tim support Haventwined?",
                "answer" => "Anda bisa menghubungi kami melalui email support@haventwined.com atau melalui live chat di platform."
            ]
        ]);
    }
}
