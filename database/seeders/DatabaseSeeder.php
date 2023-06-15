<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\pengguna;
use App\Models\kategori;
use App\Models\pesanan;
use App\Models\tukang;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        
        pengguna::create([
            'name'=>'fahir',
            'email'=>'popemilus@gmail.com',
            'password'=>bcrypt('asdasd')
        ]);
        tukang::create([
            'name'=>'ratna',
            'email'=>'ratna@gmail.com',
            'No_Hp'=>'081123456789',
            'Alamat'=>'loteng',
            'password'=>bcrypt('asdasd')
        ]);
        kategori::insert([[
            'Foto'=>'assets\img\front-door-open.jpg',
            'JenisPelayanan'=>'Alumunium & Kaca',
        ],
        [
            'Foto'=>'assets/img/tips-image-2.jpg',
            'JenisPelayanan'=>'Atap',
        ],
        [
            'Foto'=>'assets/img/tips-image-2.jpg',
            'JenisPelayanan'=>'Bor Sumur & Pompa',
        ],
        [
            'Foto'=>'assets/img/tips-image-2.jpg',
            'JenisPelayanan'=>'Cat',
        ],
        [
            'Foto'=>'assets/img/tips-image-2.jpg',
            'JenisPelayanan'=>'Dinding',
        ],
        [
            'Foto'=>'assets/img/tips-image-2.jpg',
            'JenisPelayanan'=>'Keramik',
        ],
        [
            'Foto'=>'assets/img/tips-image-2.jpg',
            'JenisPelayanan'=>'Pipa Air & Tanki Air',
        ]]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
