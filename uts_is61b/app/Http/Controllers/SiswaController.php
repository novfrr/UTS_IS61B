<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $sis = Siswa::all();
        return view('siswa.index',compact('nomor','sis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('siswa.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required|unique:siswas,nisn',
            'created_at' => 'required',
            'updated_at' => 'required',
        ]);

        $sis = new Siswa;
        $sis->create = $request->create;
        $sis->update = $request->update;
        $sis->save();

        return redirect('/siswa/');
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
        $sis = Siswa::find($id);
        if ($sis) {
            return view('siswa.edit', compact('sis'));
        } else {
            return redirect('/siswa/')->withErrors('Data tidak ditemukan');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'create' => 'required',
            'update' => 'required',
        ]);

        $sis = Siswa::find($id);
        if ($sis) {
            $sis->create = $request->create;
            $sis->update = $request->update;
            $sis->save();
        } else {
            return redirect('/siswa/')->withErrors('Data tidak ditemukan');
        }

        return redirect('/siswa/');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sis = Siswa::find($id  );
        $sis->delete();

        return redirect('/siswa/');
    }
}
