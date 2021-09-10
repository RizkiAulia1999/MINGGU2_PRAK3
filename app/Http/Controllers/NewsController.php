<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function News($id = null){
        return 'Menampilkan Daftar berita'.$id;
    }
}
