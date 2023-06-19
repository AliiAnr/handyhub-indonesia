<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\pengguna;
use App\Models\kategori;
use App\Models\admin;
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
            'No_Hp'=>'081123456790',
            'email'=>'popemilus@gmail.com',
            'password'=>bcrypt('asdasd')
        ]);
        admin::create([
            'name'=>'uhiradmin',
            'email'=>'fahir@gmail.com',
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
            'Kategori' =>'Home Maintenance'
        ],
        [
            'Foto'=>'assets/img/tips-image-2.jpg',
            'JenisPelayanan'=>'Atap',
            'Kategori' =>'Home Maintenance'
        ],
        [
            'Foto'=>'assets/img/tips-image-2.jpg',
            'JenisPelayanan'=>'Bor Sumur & Pompa',
            'Kategori' =>'Home Maintenance'
        ],
        [
            'Foto'=>'assets/img/tips-image-2.jpg',
            'JenisPelayanan'=>'Cat',
            'Kategori' =>'Home Maintenance'
        ],
        [
            'Foto'=>'assets/img/tips-image-2.jpg',
            'JenisPelayanan'=>'Dinding',
            'Kategori' =>'Home Maintenance'
        ],
        [
            'Foto'=>'assets/img/tips-image-2.jpg',
            'JenisPelayanan'=>'Keramik',
            'Kategori' =>'Home Maintenance'
        ],
        [
            'Foto'=>'assets/img/tips-image-2.jpg',
            'JenisPelayanan'=>'Pipa Air & Tanki Air',
            'Kategori' =>'Home Maintenance'
        ]]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
