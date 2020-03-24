<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserMangaController extends Controller
{
    public function store()
    {
        dd('upload');
    }

    public function create()
    {
        return view('user.manga.create');
    }
}
