<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategoriBerita;

class KategoriBeritaController extends Controller
{
    public function index(){
        $listKategoriBerita=KategoriBerita::all();

        return view('kategori_berita.index', compact('listKategoriBerita'));
}
}
