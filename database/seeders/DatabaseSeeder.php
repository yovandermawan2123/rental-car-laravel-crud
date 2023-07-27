<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Merk;
use App\Models\Mobil;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'email' => 'admin@mail.com',
            'name' => 'Admin',
            'password' => Hash::make('admin')
            // 'level_id' => 1
        ]);
        Customer::create([
            'name' => 'Yovan',
            'email' => 'yovan@mail.com',
            'phone_number' => '081320650059',
            'Address' => 'Bekasi'
            // 'level_id' => 1
        ]);
        Merk::create([
            'name' => 'Mercedes Bens',
        ]);
        Mobil::create([
            'merk_id' => 1,
            'name' => 'S Class',
            'warna' => 'Hitam',
            'plat_nomor' => 'BT AS1X 22',
            'tahun_beli' => '2021',
            'image' => 'mobil_toyota.jpg',
        ]);
    }
}
