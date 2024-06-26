<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;
use App\Http\Requests\StoreComicRequest;


class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listaFumetti = Comic::all();
        return view('layouts.comics.index',compact('listaFumetti'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreComicRequest $request)
    {
        $comic = new Comic($request->validated());
        $comic->save();

        return redirect()->route('comics.index')->with('success', 'Fumetto creato con successo');

    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('layouts.comics.show',compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)  
    {
        return view('layouts.comics.edit',compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)  
    {
        $data = $request->all();  
        $comic -> update($data);
        return redirect()->route('comics.index');  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic -> delete();
        return redirect()->route('comics.index');
    }
}
