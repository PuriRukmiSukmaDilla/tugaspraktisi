<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class produkController extends Controller
{
    public function index()
    {
        $barang =DB::table('tbl_barang')->get();
        return view('index',['barang' => $barang]);
    }

    public function insert_eloquent()
    {
        barang::create([
        	'nama' => 'Bahan Bangunan',
        	'id_kategori' => '1',
        	'qty' => '12',
        	'harga_beli' => '54000',
        	'harga_jual' => '50000'

        ]);
    }

    public function update_eloquent()
    {
        barang::where('id', 1)->update([
        	'harga_jual' => '100'
        ]);
    }

    public function store(Request $request)
    {
        $fileName=$request->file->getClientOriginalName();
        $path=$request->file->store('public/image');
        if ($request->file('file')->)
    }
   
}