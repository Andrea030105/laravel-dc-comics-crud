<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Comic;

class ComicController extends Controller
{
    public function show($id)
    {
        $header_menu = config('db.menu');
        $footer_menu = config('db.footerMenu');
        $detail_comic = Comic::find($id);
        return view('partials/comic', compact('detail_comic', 'header_menu', 'footer_menu'));
    }
}
