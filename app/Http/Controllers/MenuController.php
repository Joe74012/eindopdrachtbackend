<?php

namespace App\Http\Controllers;

use App\Models\Gerecht;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    // 🔹 FRONTEND

    public function home()
    {
        $gerechten = Gerecht::take(4)->get();
        $heroGerecht = Gerecht::first();

        return view('welcome', compact('gerechten', 'heroGerecht'));
    }

    public function about()
    {
        $heroGerecht = Gerecht::first();

        return view('about', compact('heroGerecht'));
    }

    public function menu()
    {
        $gerechten = Gerecht::all();
        return view('menu', compact('gerechten'));
    }

    // 🔹 ADMIN (CRUD)

    public function adminIndex()
    {
        $gerechten = Gerecht::latest()->get();
        return view('admin.gerechten.index', compact('gerechten'));
    }
    public function index()
    {
        $gerechten = Gerecht::all();
        return view('menu', compact('gerechten'));
    }

    public function create()
    {
        return view('admin.gerechten.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'naam' => 'required|string|max:255',
            'beschrijving' => 'nullable|string',
            'prijs' => 'required|numeric|min:0',
            'categorie' => 'required|string',
        ]);

        Gerecht::create($validated);

        return redirect()->route('gerechten.index')
            ->with('success', 'Gerecht toegevoegd!');
    }

    public function edit(Gerecht $gerecht)
    {
        return view('admin.gerechten.edit', compact('gerecht'));
    }

    public function update(Request $request, Gerecht $gerecht)
    {
        $validated = $request->validate([
            'naam' => 'required',
            'beschrijving' => 'nullable',
            'prijs' => 'required|numeric',
            'categorie' => 'required',
        ]);

        $gerecht->update($validated);

        return redirect()->route('gerechten.index')
            ->with('success', 'Gerecht bijgewerkt!');
    }

    public function destroy(Gerecht $gerecht)
    {
        $gerecht->delete();

        return back()->with('success', 'Gerecht verwijderd!');
    }
}
