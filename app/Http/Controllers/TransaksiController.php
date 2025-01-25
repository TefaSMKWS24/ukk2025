<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('transaksi.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('transaksi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_transaksi' => 'required',
            'tgl_transaksi' => 'required',
            'kode_kasir' => 'required',
            'kode_barang' => 'required',
            'kode_pelanggan' => 'required',
            'kode_voucher' => 'required',
            'kode_diskon' => 'required',
            'total_belanja' => 'required',
        ]);

        $data = [
            'kode_transaksi' => $request->kode_transaksi,
            'tgl_transaksi' => $request->tgl_transaksi,
            'kode_kasir' => $request->kode_kasir,
            'kode_barang' => $request->kode_barang,
            'kode_pelanggan' => $request->kode_pelanggan,
            'kode_voucher' => $request->kode_voucher,
            'kode_diskon' => $request->kode_diskon,
            'total_belanja' => $request->total_belanja,
        ];

        DB::table('transaksi')->insert($data);
        return redirect()->view('transaksi.index');
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
        DB::table('transaksi')->where('kode_transaksi', $id)->delete();
        return redirect()->view('transaksi.index');
    }
}
