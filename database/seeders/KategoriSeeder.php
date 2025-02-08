<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kode_kategori' => 'K001',
                'nama_kategori' => 'Fashion',
                'keterangan' => 'Kategori fashion',
            ],
        ];

        DB::table('kategori')->insert($data);
    }
}
