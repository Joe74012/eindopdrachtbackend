<?php

namespace App\Http\Controllers;
use App\Models\Gerecht;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function home()
{
    $gerechten = Gerecht::take(4)->get(); // 4 voorbeeld gerechten laten zien
    $heroGerecht = Gerecht::first(); // gerecht aan hero section
    return view('welcome', compact('gerechten', 'heroGerecht'));
}

    public function about()
    {
        $heroGerecht = Gerecht::first();

        return view('about', compact('heroGerecht'));
    }

    public function index()
    {
        $gerechten = Gerecht::all();
        return view('menu', compact('gerechten'));
    }
    public function create()
    {

    }
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

    public function show(string $id)
    {

    }
    public function edit(string $id)
    {

    }

    public function update(Request $request, string $id)
    {

    }

    public function destroy(string $id)
    {

    }
}
