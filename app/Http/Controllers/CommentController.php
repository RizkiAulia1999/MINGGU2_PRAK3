<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function Comment($nama = 'Aulia',$pesan = 'MI2F'){
        return 'Menampilkan isi parameter nama '.$nama.' dan '.$pesan;
    }
}
