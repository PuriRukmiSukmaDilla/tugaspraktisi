<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kategoriController extends Controller
{
    public function insert_eloquent()
    {
    	Barang::create(['nama' => 'Bahan Bangunan', 'harga' => 1000,

    ]);
    	//return view('produk',['produk' => $produk]);
    }
}

