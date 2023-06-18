<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() 
    {
        $layanans = Layanan::orderBy('created_at', 'DESC')->get();

        return view('layanan.index', compact('layanans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layanan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Layanan::create($request->all());

        return redirect()->route('layanan.index')->with('success','Layanan added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $layanans = Layanan::findOrFail($id);

        return view('layanan.show', compact('layanans'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $layanans = Layanan::findOrFail($id);

        return view('layanan.edit', compact('layanans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $layanans = Layanan::findOrFail($id);

        $layanans->update($request->all());

        return redirect()->route('layanan.index')->with('success','Layanan updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $layanans = Layanan::findOrFail($id);

        $layanans->delete();

        return redirect()->route('layanan.index')->with('success','Layanan deleted successfully');
    }
}
