<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'kode_kategori'    =>  'ASSETS',
                'nama_kategori'    =>  'ASSETS',
            ],
            [
                'kode_kategori'    =>  'INVENTORY',
                'nama_kategori'    =>  'INVENTORY',
            ],
        ];
        DB::table('kategori')->insert($data);
    }
}
