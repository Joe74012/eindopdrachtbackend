<?php

namespace App\Http\Controllers;

use App\Models\Gerecht;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    public function home()
    {
        $gerechten = Gerecht::take(4)->get();

        return view('welcome', compact('gerechten'));
    }
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
        $request->validate([
            'naam' => 'required|string|max:255',
            'beschrijving' => 'nullable|string',
            'prijs' => 'required|numeric|min:0',
            'categorie' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->only([
            'naam',
            'beschrijving',
            'prijs',
            'categorie',
        ]);

        if ($request->hasFile('image')) {
            $data['afbeelding'] = $request->file('image')->store('gerechten', 'public');
        }

        Gerecht::create($data);

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
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('image')) {

            if ($gerecht->afbeelding) {
                Storage::disk('public')->delete($gerecht->afbeelding);
            }

            $validated['afbeelding'] = $request->file('image')->store('gerechten', 'public');
        }

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
