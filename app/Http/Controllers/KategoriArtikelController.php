<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategoriArtikel;

class KategoriArtikelController extends Controller
{
    public function index(){
        $listkategoriArtikel=kategoriArtikel::all();

        return view('kategori_artikel.index', compact('listkategoriArtikel'));
    }

    public function create()
    {
        return view('kategori_artikel.create');
    }

    public function store(Request $request)
    {  
        $input=$request->all();
        //return $input;
        kategoriArtikel::create([
            'nama'=>$input['nama'],
            'users_id'=>$input['user_id']
        ]);
        
   
        return redirect()->route('kategori_artikel.index')
                         ->with('Sukses','Kategori Artikel Berhasil di tambah.');
    }
}
