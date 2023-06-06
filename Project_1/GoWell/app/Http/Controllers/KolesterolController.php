<?php

namespace App\Http\Controllers;

use App\Models\Kolesterol;
use App\Http\Requests\StoreKolesterolRequest;
use App\Http\Requests\UpdateKolesterolRequest;
use Auth;
use Illuminate\Http\Request;

class KolesterolController extends Controller
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
        $Kolesterol = new Kolesterol;
        $Kolesterol->uid = $user->id;
        $Kolesterol->angka = $request->input('angka');
        $Kolesterol->Periode = $request->input('periode');
        $Kolesterol->save();

        return redirect('/profile')->with('success', 'Your Cholesterol Data Has Been Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kolesterol $kolesterol)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kolesterol $kolesterol)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKolesterolRequest $request, Kolesterol $kolesterol)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kolesterol $kolesterol)
    {
        //
    }
}
