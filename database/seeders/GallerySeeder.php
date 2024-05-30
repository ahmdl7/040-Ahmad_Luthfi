<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //menambahkan data ke tabel galleries
        DB::table('galleries')->insert([
        [
            'id' => 1,
            'image' => '1716889903.webp',
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'id' => 2,
            'image' => '1716889924.webp',
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'id' => 3,
            'image' => '1716889935.webp',
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'id' => 4,
            'image' => '1716889945.webp',
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'id' => 5,
            'image' => '1716889954.webp',
            'created_at' => now(),
            'updated_at' => now()
        ]
    ]);
    }
}
