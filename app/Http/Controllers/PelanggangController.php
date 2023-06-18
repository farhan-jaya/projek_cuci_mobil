<?php

namespace App\Http\Controllers;

use App\Models\layanan;
use App\Models\Pelanggang;
use Illuminate\Http\Request;

class PelanggangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pelanggangs = Pelanggang::with('Layanan')->orderBy('created_at', 'DESC')->get();

        return view('pelanggang.index', compact('pelanggangs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $layanans = layanan::all();

        return view('pelanggang.create', compact('layanans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Pelanggang::create($request->all());

        return redirect()->route('pelanggang.index')->with('success', 'Pelanggang added successfully');
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
        $layanans = layanan::all();
        $pelanggangs = Pelanggang::findOrFail($id);

        return view('pelanggang.edit', compact('pelanggangs'));
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
        //
    }
}
