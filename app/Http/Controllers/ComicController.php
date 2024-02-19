<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic :: all();

        return view('pages.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request -> all();

        $newComic = new Comic();

        $newComic -> title = $data['title'];
        $newComic -> publication_year = $data['publication_year'];
        $newComic -> pages = $data['pages'];
        $newComic -> price = $data['price'];
        $newComic -> ratings = $data['ratings'];

        $newComic -> save();

        return redirect() -> route('comics.show', $newComic -> id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic :: find($id);
        return view('pages.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic :: find($id);

        return view('pages.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $comic = Comic :: find($id);

        $data = $request->validate([
            'title' => 'required|regex:/^[a-zA-Z0-9\s\-\'!?,.:&]+$/|min:3|max:255',
            'publication_year' => 'required|date',
            'pages' => 'required|integer|min:1|max:99999999999',
            'price' => 'required|numeric|min:0|max:999999.99',
            'ratings' => 'required|numeric|min:0|max:10',
        ]);

        $comic -> title = $data['title'];
        $comic -> publication_year = $data['publication_year'];
        $comic -> pages = $data['pages'];
        $comic -> price = $data['price'];
        $comic -> ratings = $data['ratings'];

        $comic -> save();

        return redirect() -> route('comics.show', $comic -> id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic :: find($id);
        $comic -> delete();

        return redirect() -> route('comics.index');
    }
}
