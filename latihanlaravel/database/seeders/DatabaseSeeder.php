<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed users table
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10) . '@example.com',
            'password' => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Seed mahasiswa table
        // DB::table('mahasiswa')->insert([
        //     'npm' => '2428250051',
        //     'nama' => 'Muhammad Irfan',
        //     'tanggal_lahir' => '2006-08-27', // ini tanggal lahir, bukan kota
        //     'alamat' => 'Palembang',
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);

        // DB::table('mahasiswa')
        // ->where("npm","2428250052")
        // ->update(["npm" => "2529250051"]);

    //     Mahasiswa::insert([
    //         'npm' => '2428250051',
    //         'nama' => 'Muhammad Irfan',
    //         'tanggal_lahir' => '2006-08-27', // ini tanggal lahir, bukan kota
    //         'alamat' => 'Palembang',
    //         'created_at' => now(),
    //         'updated_at' => now(),
    //     ])
     }
}
