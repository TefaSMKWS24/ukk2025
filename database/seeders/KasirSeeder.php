<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class KasirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kode_kasir' => 'KS001',
                'password' => Hash::make('password'),
                'nama_kasir' => 'Kasir 1',
                'nohp' => '08123456789',
            ],
        ];

        DB::table('kasir')->insert($data);
    }
}
