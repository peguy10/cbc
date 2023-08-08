<?php

namespace App\Http\Controllers;

use App\Models\Association;
use Illuminate\Http\Request;

class AssociationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id=1;
        $association=Association::find($id);
     return view('Pages.association',compact('association'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $associations=Association::all();
        return view('Pages.member',compact('associations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $save = new Association();
        $save->name=$request->name;
        $save->email=$request->email;
        $save->phone=$request->phone;
        $save->adresse=$request->adresse;
        $save->pays=$request->pays;
        $save->but=$request->but;
        $save->ref_bank=$request->ref_bank;
        $save->agrement=$request->agrement;
        $save->num_com=$request->num_com;
        $save->siret=$request->siret;
        $save->code_naf=$request->code_naf;
        $save->reg_com=$request->reg_com;
        $save->save();
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     */
    public function show(Association $association)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Association $association)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $save = Association::find($id);
        $save->name=$request->name;
        $save->email=$request->email;
        $save->phone=$request->phone;
        $save->adresse=$request->adresse;
        $save->pays=$request->pays;
        $save->but=$request->but;
        $save->ref_bank=$request->ref_bank;
        $save->agrement=$request->agrement;
        $save->num_com=$request->num_com;
        $save->siret=$request->siret;
        $save->code_naf=$request->code_naf;
        $save->reg_com=$request->reg_com;
        $save->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Association $association)
    {
        //
    }
}
