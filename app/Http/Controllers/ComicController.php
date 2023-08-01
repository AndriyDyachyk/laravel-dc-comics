<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        //
    }
}
