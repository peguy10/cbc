<?php

namespace App\Http\Controllers;

use App\Models\Cotisation;
use App\Models\Periode;
use Illuminate\Http\Request;

class CotisationController extends Controller
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
        $periode = Periode::where('id',$request->periode_id)->first();
        $reste = $periode->cotisation_annuelle - $request->regler;
        $save = new Cotisation();
        $save->regler = $request->regler;
        $save->reste = $reste;
        $save->periode_id = $request->periode_id;
        $save->user_id = $request->user_id;
        $save->observation = $request->observation;
        $save->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Cotisation $cotisation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cotisation $cotisation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $cotisation = Cotisation::where('id',$id)->first();
        $regler = $cotisation->regler + $request->regler;
        $reste = $cotisation->reste - $regler;
        $save = Cotisation::find($id);
        $save->regler = $regler;
        $save->reste = $reste;
        $save->periode_id = $request->periode_id;
        $save->user_id = $request->user_id;
        $save->observation = $request->observation;
        $save->save();
        return redirect('/cotisations')->with('success','Ajouter avec success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cotisation $cotisation)
    {
        //
    }
}
