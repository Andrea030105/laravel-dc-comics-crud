<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class HomePage extends Controller
{
    public function index()
    {
        $header_menu = config('db.menu');
        $footer_menu = config('db.footerMenu');
        $comics = Comic::all();
        return view('index', compact('comics', 'header_menu', 'footer_menu'));
    }
}
