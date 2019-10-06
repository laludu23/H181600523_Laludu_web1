<?php

namespace App\Http\Controllers;

use App\KategoriGaleri;
use Illuminate\Http\Request;

class KategoriGaleriController extends Controller
{
    public function index(){
        $listkategoriGaleri=KategoriGaleri::all();

        return view('kategori_galeri.index', compact('listkategoriGaleri'));
    }  
}
