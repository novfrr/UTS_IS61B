<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $pen = Pendaftaran::all();
        return view('pendaftaran.index',compact('nomor','pen'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pendaftaran.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pen = new Pendaftaran;
        $pen->kode = $request->kode;
        $pen->pendaftaran = $request->nama;
        $pen->save();

        return redirect('/pendaftaran/');
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
        $pen = Pendaftaran::find($id);
        return view('pendaftaran.edit',compact('pen'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pen = Pendaftaran::find($id);
        $pen->kode = $request->kode;
        $pen->pendaftaran = $request->nama;
        $pen->save();

        return redirect('/pendaftaran/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pen = Pendaftaran::find($id);
        $pen->delete();

        return redirect('/Pendaftaran/');
    }
}
