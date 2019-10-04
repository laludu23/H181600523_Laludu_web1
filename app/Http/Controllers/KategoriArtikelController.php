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
}
