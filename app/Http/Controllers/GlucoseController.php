<?php

namespace App\Http\Controllers;

use App\Models\Glucose;
use App\Http\Requests\StoreGlucoseRequest;
use App\Http\Requests\UpdateGlucoseRequest;
use Auth;
use Illuminate\Http\Request;

class GlucoseController extends Controller
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
        $user = Auth::user();
        $glucose = new Glucose;
        $glucose->uid = $user->id;
        $glucose->angka = $request->input('angka');
        $glucose->Periode = $request->input('periode');
        $glucose->save();

        return redirect('/profile')->with('success', 'Your Glucose Data Has Been Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Glucose $glucose)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Glucose $glucose)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGlucoseRequest $request, Glucose $glucose)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Glucose $glucose)
    {
        //
    }
}
