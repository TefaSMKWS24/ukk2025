<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('kategori.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_kategori' => 'required',
            'nama_kategori' => 'required',
            'keterangan' => 'required',
        ]);

        $data = [
            'kode_kategori' => $request->kode_kategori,
            'nama_kategori' => $request->nama_kategori,
            'keterangan' => $request->keterangan,
        ];

        DB::table('kategori')->insert($data);
        return redirect()->view('kategori.index');

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
        $kategori = DB::table('kategori')->where('kode_kategori', $id)->first();
        return view('kategori.edit', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_kategori' => 'required',
            'keterangan' => 'required',
        ]);

        $data = [
            'nama_kategori' => $request->nama_kategori,
            'keterangan' => $request->keterangan,
        ];

        DB::table('kategori')->where('kode_kategori', $id)->update($data);
        return redirect()->view('kategori.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('kategori')->where('kode_kategori', $id)->delete();
        return redirect()->view('kategori.index');
    }
}
