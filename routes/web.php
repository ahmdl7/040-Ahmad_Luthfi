<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {

    $gambar = ['img/galery/1.webp', 
                'img/galery/2.webp', 
                'img/galery/3.webp', 
                'img/galery/4.webp', 
                'img/galery/5.webp'];    
    

    $products = [
        [
            'image' => '/img/glasses/CARRERA_CARBON_Sunglasses_AVIATOR_SCA8034010KU61_1200000005649-s.jpg',
            'ket' => 'gambar 1',
            'name' => 'CARRERA',
            'code' => 'SCA-8034-010-KU61',
            'price' => 1500000    
        ],
        [
            'image' => '/img/glasses/ERMENEGILDO_ZEGNA_METAL_Frame_RECTANGLE_FEZ5165D03856_1100000020812-s.jpg',
            'ket' => 'gambar 2',
            'name' => 'ERMENEGILDO',
            'code' => 'FEZ-5165-D03856',
            'price' => 2000000
        ],
        [
            'image' => '/img/glasses/HANG_TEN_METAL_Frame_AVIATOR_FHT10545C152_1100000026311-s.jpg',
            'ket' => 'gambar 3',
            'name' => 'HANG TEN',
            'code' => 'FHT-10545-C152',
            'price' => 1350000
        ],
        [
            'image' => '/img/glasses/HUGO_PLASTIC_Frame_AVIATOR_FHU1093OIT55_1100000026788-s.jpg',
            'ket' => 'gambar 4',
            'name' => 'HUGO',
            'code' => 'FHU-1093O-IT55',
            'price' => 1000000
        ],
        [
            'image' => '/img/glasses/LACOSTE_METAL_Sunglasses_AVIATOR_SLAL236SA00160_1200000023435-s.png',
            'ket' => 'gambar 5',
            'name' => 'LACOSTE',
            'code' => 'SLAL-236S-A00160',
            'price' => 1200000
        ],
        [
            'image' => '/img/glasses/NIKE_PLASTIC_Sunglasses_GEOMETRIC_SNKDJ304410076_1200000026813-s.png',
            'ket' => 'gambar 6',
            'name' => 'NIKE',
            'code' => 'SNK-DJ304-410076',
            'price' => 3500000
        ],
        [
            'image' => '/img/glasses/PUMA_PLASTIC_Sunglasses_SQUARE_SPPE0048SA00458_1200000017044-s.jpg',
            'ket' => 'gambar 7',
            'name' => 'PUMA',
            'code' => 'SPPE-0048-SA00458',
            'price' => 3500000
        ],
        [
            'image' => '/img/glasses/TED_BAKER_METAL_Frame_RECTANGLE_FTB4327166351_1100000052017-s.png',
            'ket' => 'gambar 8',
            'name' => 'TED BAKER',
            'code' => 'FTB-43271-66351',
            'price' => 1900000
        ]    
    ];
    return view('index', ['products' => $products], ['gambar' => $gambar]);
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/detail', function () {
    return view('detail');
});