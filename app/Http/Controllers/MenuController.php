<?php

namespace App\Http\Controllers;
use App\Models\Gerecht; // ← deze regel mist!
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home()
{
    $gerechten = Gerecht::take(4)->get();
    return view('welcome', compact('gerechten'));
}

public function index()
{
    $gerechten = Gerecht::all();
    return view('menu.index', compact('gerechten'));
}
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'naam'        => 'required|string|max:255',
            'beschrijving'=> 'nullable|string',
            'prijs'       => 'required|numeric|min:0',
            'categorie'   => 'required|string',
        ]);

        $gerecht = Gerecht::create($validated);

        return redirect()->route('menu.index')
                         ->with('success', 'Gerecht toegevoegd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
