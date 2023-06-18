<?php

namespace App\Http\Controllers;

use App\Models\ManajemenUser;
use Illuminate\Http\Request;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = ManajemenUser::orderBy('created_at', 'DESC')->get();

        return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        ManajemenUser::create($request->all());

        return redirect()->route('user.index')->with('success','User added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $users = ManajemenUser::findOrFail($id);

        return view('user.show', compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $users = ManajemenUser::findOrFail($id);

        return view('user.edit', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $users = ManajemenUser::findOrFail($id);

        $users->update($request->all());

        return redirect()->route('user.index')->with('success','User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $users = ManajemenUser::findOrFail($id);

        $users->delete();

        return redirect()->route('user.index')->with('success','User deleted successfully');
    }
}
