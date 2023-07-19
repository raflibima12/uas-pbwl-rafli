<?php

namespace App\Http\Controllers;

use App\Models\Tipe;
use Illuminate\Http\Request;

class TipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Tipe::all();
        return view('tipe.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tipe.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Tipe::create([
            'tipe_baju' => $request->tipe_baju,
            'tipe_unisex_baju' => $request->tipe_unisex_baju
        ]);

        return redirect('tipe');
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
        $row = Tipe::findOrFail($id);
        return view('tipe.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Tipe::findOrFail($id);
        $row->update([
            'tipe_baju' => $request->tipe_baju,
            'tipe_unisex_baju' => $request->tipe_unisex_baju
        ]);
        return redirect('tipe');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Tipe::findOrFail($id);
        $row->delete();

        return redirect('tipe');
    }
}
