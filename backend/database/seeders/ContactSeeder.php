<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("contacts")->insert([
            [
                "content_id" => 1,
                "platform" => "Email",
                "text" => "support@haventwined.com",
                "link" => "https://mailto:support@haventwined.com",
            ],
            [
                "content_id" => 1,
                "platform" => "Whatsapp",
                "text" => "+62 822-9944-9708",
                "link" => "https://wa.me/6282299449708",
            ],
        ]);
    }
}
