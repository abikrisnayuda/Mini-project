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
        DB::table('barangs')->insert([
            [
                'kode_barang' => '0001',
                'nama_barang' => 'Oreo',
                'harga_barang'=> 8000,
                'deskripsi_barang' => 'oreo coklat',
                'satuan_barang_id' => 1
            ],
        ]);
    }
}
