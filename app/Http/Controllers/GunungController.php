<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gunung;

class GunungController extends Controller
{
    public function index()
    {
        $gunung = Gunung::all();
        return view('gunung.index', compact('gunung'));
    }

    public function create()
    {
        return view('gunung.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_gunung' => 'required',
            'lokasi' => 'required',
            'estimasi_waktu' => 'required',
            'kuota' => 'required|numeric',
            'deskripsi' => 'required'
        ]);

        Gunung::create($request->all());

        return redirect()->route('gunung.index');
    }

    public function edit($id)
    {
        $gunung = Gunung::findOrFail($id);
        return view('gunung.edit', compact('gunung'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_gunung' => 'required',
            'lokasi' => 'required',
            'estimasi_waktu' => 'required',
            'kuota' => 'required|numeric',
            'deskripsi' => 'required'
        ]);

        $gunung = Gunung::findOrFail($id);
        $gunung->update($request->all());

        return redirect()->route('gunung.index');
    }

    public function destroy($id)
    {
        $gunung = Gunung::findOrFail($id);
        $gunung->delete();

        return redirect()->route('gunung.index');
    }
}