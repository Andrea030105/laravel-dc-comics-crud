<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePages extends Controller
{
    public function index()
    {
        $header_menu = config('db.menu');
        $footer_menu = config('db.footerMenu');
        return view('homepage', compact('header_menu', 'footer_menu'));
    }
}
