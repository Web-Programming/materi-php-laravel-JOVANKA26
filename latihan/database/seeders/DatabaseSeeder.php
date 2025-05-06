<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use DB;
use Hash;
use Illuminate\Database\Seeder;
USE str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        DB::table('user')->insert([
            'name' => str::random(10),
            'email' => str::random(10).'@example',
            'password'=> Hash::make('pasword'),
        ]);

        //insert data mahasiswa menggunakan query buider
        DB::table('mahasiswa')->insert(
           [
               'npm'=> '2428250079',
               'name_mahasiswa'=> 'Jovan',
               'tempat_lahir'=> 'Lubuklinggau',
               'tanggal_lahir'=> '2005-01-01',
               'alamat'=> 'Lubuklinggau',
               'created_at'=> date("Y-m-d H:i:s")
            ]
        );

        DB::table('masiswa')
            ->where("npm", "204735743")
            ->where(["npm","20473574J"]);

        //Mahasiswa::insert(
        //    [
        //        'npm'=> '2428250079',
        //        'name_mahasiswa'=> 'Jovan',
        //        'tempat_lahir'=> 'Lubuklinggau',
        //       'tanggal_lahir'=> '2005-01-01',
        //        'alamat'=> 'Lubuklinggau',
        //        'created_at'=> date("Y-m-d H:i:s")
        //    ]);

        //retirve all data
        Mahasiswa::all();
        Mahasiswa::where('id', '<', 3)->get();
        ///Mahasiswa::select([])
    }
}
