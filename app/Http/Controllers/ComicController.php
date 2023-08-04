<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        $menus = config('navBar.navBarMenu');
        $shops = config('mainshop.shops');
        $terms = config('terms.terms');
        $social = config('social.social');
        return view('comics.index', compact('comics','menus','shops','terms','social'));
    }

    public function home()
    {
        $comics = Comic::all();
        $menus = config('navBar.navBarMenu');
        $shops = config('mainshop.shops');
        $terms = config('terms.terms');
        $social = config('social.social');
        return view('home', compact('comics','menus','shops','terms','social'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menus = config('navBar.navBarMenu');
        $terms = config('terms.terms');
        $social = config('social.social');
        return view('comics.create', compact('menus','social','terms'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreComicRequestRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreComicRequest $request)
    {
        $form_data = $request->all();

        $comic = new Comic();

        $comic->fill($form_data);

        $comic->save();

        return redirect(route('comic.show', ['comic' => $comic->id]));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        $menus = config('navBar.navBarMenu');
        $shops = config('secondaryshop.shops');
        $terms = config('terms.terms');
        $social = config('social.social'); 
        return view('comics.show', compact('comic','menus','shops','terms','social'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        $menus = config('navBar.navBarMenu');
        $terms = config('terms.terms');
        $social = config('social.social');
        return view('comics.edit', compact('comic','menus','social','terms'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateComicRequest  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateComicRequest $request, Comic $comic)
    {
        $form_data = $request->all();

        $comic->update($form_data);

        return redirect()->route('comic.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comic.index');
    }
}
