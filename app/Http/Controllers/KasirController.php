<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class KasirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('kasir.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kasir.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_kasir' => 'required',
            'nama_kasir' => 'required',
            'password' => 'required',
            'nohp' => 'required',
        ]);

        $data = [
            'kode_kasir' => $request->kode_kasir,
            'nama_kasir' => $request->nama_kasir,
            'password' => $request->password,
            'nohp' => $request->nohp,
        ];

        DB::table('kasir')->insert($data);

        return redirect()->view('kasir.index');
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
        $kasir = DB::table('kasir')->where('kode_kasir', $id)->first();
        return view('kasir.edit', compact('kasir'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_kasir' => 'required',
            'password' => 'required',
            'nohp' => 'required',
        ]);

        $data = [
            'nama_kasir' => $request->nama_kasir,
            'password' => $request->password,
            'nohp' => $request->nohp,
        ];

        DB::table('kasir')->where('kode_kasir', $id)->update($data);
        return redirect()->view('kasir.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('kasir')->where('kode_kasir', $id)->delete();
        return redirect()->view('kasir.index');
    }
}
