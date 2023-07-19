<?php

namespace App\Http\Controllers;

use App\Models\Baju;
use App\Models\Tipe;
use Illuminate\Http\Request;

class BajuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $rows = Baju::all();
        $rows = Baju::with('r_tipe')->get();
        return view('baju.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rowsTipe = Tipe::all();
        return view('baju.create', compact('rowsTipe'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Baju::create([
            'nama_baju' => $request->nama_baju,
            'ukuran_baju' => $request->ukuran_baju,
            'harga_baju' => $request->harga_baju,
            'warna_baju' => $request->warna_baju,
            'desc_baju' => $request->desc_baju,
            'id_type_baju' => $request->id_type_baju
        ]);

        return redirect('baju');
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
        $rowsTipe = Tipe::all();
        $row = Baju::findOrFail($id);
        $rowTipe = Tipe::findOrFail($row->id_type_baju);
        return view('baju.edit', compact('row', 'rowsTipe', 'rowTipe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Baju::findOrFail($id);
        $row->update([
            'nama_baju' => $request->nama_baju,
            'ukuran_baju' => $request->ukuran_baju,
            'harga_baju' => $request->harga_baju,
            'warna_baju' => $request->warna_baju,
            'desc_baju' => $request->desc_baju,
            'id_type_baju' => $request->id_type_baju
        ]);
        return redirect('baju');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Baju::findOrFail($id);
        $row->delete();

        return redirect('baju');
    }
}
