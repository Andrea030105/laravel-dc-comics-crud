<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
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
        $data = $this->validation($request->all());

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
        $form_data = $this->validation($request->all());

        $comic->update($form_data);
        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $comic = Comic::findOrFail($id);
        $comic->delete();
        return redirect()->route('comics.index');
    }

    private function validation($data)
    {
        $validator = Validator::make(
            $data,
            [
                'slug' => 'required|max:255',
                'title' => 'required|max:255',
                'description' => 'required',
                'thumb' => 'required|max:500',
                'price' => 'required|decimal:6,2',
                'series' => 'required|max:255',
                'sale_date' => 'required',
                'type' => 'required|max:50',
                'artists' => 'required',
                'writers' => 'required',
            ],
            [
                'slug.required' => 'Lo SLUG è obbligatorio',
                'slug.max' => 'Lo SLUG non può essere superiore a :max caratteri',

                'title.required' => 'Il TITOLO è obbligatorio',
                'title.max' => 'Il TITOLO non può essere superiore a :max caratteri',

                'description.required' => 'La DESCRIZIONE è obbligatorio',

                'thumb.required' => 'La THUMB è obbligatorio',
                'thumb.max' => 'La THUMB non può essere superiore a :max caratteri',

                'price.required' => 'Il PREZZO è obbligatorio',

                'series.required' => 'Le SERIE è obbligatorio',
                'series.max' => 'Le SERIE non può essere superiore a :max caratteri',

                'sale_date.required' => 'Il SALE DATE è obbligatorio',

                'type.required' => 'Il TYPE è obbligatorio',
                'type.max' => 'Il TYPE non può essere superiore a :max caratteri',

                'artists.required' => 'Gli ARTISTS è obbligatorio',
                'artists.max' => 'Gli ARTISTS non può essere superiore a :max caratteri',

                'writers.required' => 'I WRITERS è obbligatorio',
                'writers.max' => 'I WRITERS non può essere superiore a :max caratteri',
            ]
        )->validate();
        return $validator;
    }
}
