<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //menambahkan data ke tabel collections
        DB::table('collections')->insert([
            [
                'id' => 1,
                'nama' => 'CARRERA',
                'kode' => 'SCA-8034-010-KU61',
                'harga' => 1500000,
                'stok' => 5,
                'deskripsi' => 'Bridge : 18
                Diagonal : 49
                Material : Plastic
                Size : 48
                Temple Length : 135
                Vertical : 39', 	
                'image'	=> '1716892750.jpg',
                'created_at' => now(),	
                'updated_at' => now()

            ],
            [
                'id' => 2,
                'nama' => 'ERMENEGILDO',
                'kode' => 'FEZ-5165-D03856',
                'harga' => 2000000,
                'stok' => 7,
                'deskripsi' => 'Bridge : 18
                Diagonal : 49
                Material : Plastic
                Size : 48
                Temple Length : 135
                Vertical : 39', 	
                'image'	=> '1716892829.jpg',
                'created_at' => now(),	
                'updated_at' => now()

            ],
            [
                'id' => 3,
                'nama' => 'HANG TEN',
                'kode' => 'FHT-10545-C152',
                'harga' => 1350000,
                'stok' => 5,
                'deskripsi' => 'Bridge : 18
                Diagonal : 49
                Material : Plastic
                Size : 48
                Temple Length : 135
                Vertical : 39', 	
                'image'	=> '1716892930.jpg',
                'created_at' => now(),	
                'updated_at' => now()

            ],
            [
                'id' => 4,
                'nama' => 'HUGO',
                'kode' => 'FHU-1093O-IT55',
                'harga' => 1000000,
                'stok' => 4,
                'deskripsi' => 'Bridge : 18
                Diagonal : 49
                Material : Plastic
                Size : 48
                Temple Length : 135
                Vertical : 39', 	
                'image'	=> '1716893034.jpg',
                'created_at' => now(),	
                'updated_at' => now()

            ],
            [
                'id' => 5,
                'nama' => 'LACOSTE',
                'kode' => 'SLAL-236S-A00160',
                'harga' => 1200000,
                'stok' => 3,
                'deskripsi' => 'Bridge : 18
                Diagonal : 49
                Material : Plastic
                Size : 48
                Temple Length : 135
                Vertical : 39', 	
                'image'	=> '1716893100.jpg',
                'created_at' => now(),	
                'updated_at' => now()

            ],
            [
                'id' => 6,
                'nama' => 'NIKE',
                'kode' => 'SNK-DJ304-410076',
                'harga' => 3500000,
                'stok' => 2,
                'deskripsi' => 'Bridge : 18
                Diagonal : 49
                Material : Plastic
                Size : 48
                Temple Length : 135
                Vertical : 39', 	
                'image'	=> '1716893196.png',
                'created_at' => now(),	
                'updated_at' => now()

            ],
            [
                'id' => 7,
                'nama' => 'PUMA',
                'kode' => 'SPPE-0048-SA00458',
                'harga' => 3500000,
                'stok' => 2,
                'deskripsi' => 'Bridge : 18
                Diagonal : 49
                Material : Plastic
                Size : 48
                Temple Length : 135
                Vertical : 39', 	
                'image'	=> '1716893300.jpg',
                'created_at' => now(),	
                'updated_at' => now()

            ],
            [
                'id' => 8,
                'nama' => 'TED BAKER',
                'kode' => 'FTB-43271-66351',
                'harga' => 1900000,
                'stok' => 4,
                'deskripsi' => 'Bridge : 18
                Diagonal : 49
                Material : Plastic
                Size : 48
                Temple Length : 135
                Vertical : 39', 	
                'image'	=> '1716893356.png',
                'created_at' => now(),	
                'updated_at' => now()

            ]
            ]);
    }
}
