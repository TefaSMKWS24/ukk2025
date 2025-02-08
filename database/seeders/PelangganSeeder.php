<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kode_pelanggan' => 'PL001',
                'nama_pelanggan' => 'Andi',
                'no_hp' => '081234567890',
            ],
        ];

        DB::table('pelanggan')->insert($data);
    }
}
