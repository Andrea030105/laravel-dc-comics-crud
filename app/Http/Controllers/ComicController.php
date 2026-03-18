<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $header_menu = config('db.menu');
        $footer_menu = config('db.footerMenu');
        $comics = Comic::all();
        return view('comics/index', compact('comics', 'header_menu', 'footer_menu'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $header_menu = config('db.menu');
        $footer_menu = config('db.footerMenu');
        return view('comics/create', compact('header_menu', 'footer_menu'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $newComic = new Comic();
        /* $newComic->slug = $data['slug'];
        $newComic->title = $data['title'];
        $newComic->description = $data['description'];
        $newComic->thumb = $data['thumb'];
        $newComic->price = $data['price'];
        $newComic->series = $data['series'];
        $newComic->sale_date = $data['sale_date'];
        $newComic->type = $data['type'];
        $newComic->artists = $data['artists'];
        $newComic->writers = $data['writers']; */

        $newComic->fill($data);
        $newComic->save();
        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $header_menu = config('db.menu');
        $footer_menu = config('db.footerMenu');
        $detail_comic = Comic::findOrFail($id);
        return view('comics/show', compact('detail_comic', 'header_menu', 'footer_menu'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $header_menu = config('db.menu');
        $footer_menu = config('db.footerMenu');
        $detail_comic = Comic::findOrFail($id);
        return view('comics/edit', compact('detail_comic', 'header_menu', 'footer_menu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $comic = Comic::findOrFail($id);
        $form_data = $request->all();
        $comic->update($form_data);
        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
