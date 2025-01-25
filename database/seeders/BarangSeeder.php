<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kode_barang' => 'BR001',
                'nama_barang' => 'Sepatu',
                'harga' => 100000,
                'stok' => 10,
                'kode_kategori' => 'K001',
            ],
            [
                'kode_barang' => 'BR002',
                'nama_barang' => 'Sepatu',
                'harga' => 30000,
                'stok' => 10,
                'kode_kategori' => 'K002',
            ],
        ];

        DB::table('barang')->insert($data);
    }
}
