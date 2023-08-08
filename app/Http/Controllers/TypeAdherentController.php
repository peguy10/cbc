<?php

namespace App\Http\Controllers;

use App\Models\TypeAdherent;
use Illuminate\Http\Request;

class TypeAdherentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $save = new TypeAdherent();
        $save->name=$request->name;
        $save->description=$request->description;
        $save->droit=$request->droit;
        $save->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(TypeAdherent $typeAdherent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TypeAdherent $typeAdherent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TypeAdherent $typeAdherent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TypeAdherent $typeAdherent)
    {
        //
    }
}
