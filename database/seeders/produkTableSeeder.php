<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class produkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barang')->insert(array(['nama' => 'uniqlo', 'id_kategori' => '1', 'qty' => '12', 'harga_beli' =>
        '140000', 'harga_jual' => '140000', ],['nama' => 'Kursi', 'id_kategori' => '1', 'qty' => '12', 'harga_beli' => '40000', 
        'harga_jual' => '450000',]));
    }
}
