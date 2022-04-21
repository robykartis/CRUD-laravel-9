<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use Illuminate\Http\Request;

class WargaController extends Controller
{
    public function index()
    {
        $warga = Warga::all();
        $title = ('Index Warga');
        // dd($warga);
        return view('warga.index', compact(['warga', 'title']));
    }
    public function create()
    {
        $title = ('Tambah Warga');
        return view('warga.create', compact(['title']));
    }
    public function store(Request $request)
    {
        // dd($request->all());
        Warga::create($request->except(['_token', 'submit']));
        return redirect('/warga');
    }
    public function edit($id)
    {
        $title = ('Edit Warga');
        $warga = Warga::find($id);
        // dd($warga);
        return view('warga.edit', compact(['warga', 'title']));
    }
    public function update($id, Request $request)
    {
        $warga = Warga::find($id);
        $warga->update($request->except(['_token', 'submit']));
        return redirect('/warga');
    }
    public function destroy($id)
    {
        $warga = Warga::find($id);
        $warga->delete();
        return redirect('/warga');
    }
}