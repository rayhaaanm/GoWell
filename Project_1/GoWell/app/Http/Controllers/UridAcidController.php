<?php

namespace App\Http\Controllers;

use App\Models\UridAcid;
use App\Http\Requests\StoreUridAcidRequest;
use App\Http\Requests\UpdateUridAcidRequest;
use Auth;
use Illuminate\Http\Request;

class UridAcidController extends Controller
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
        $UridAcid = new UridAcid;
        $UridAcid->uid = $user->id;
        $UridAcid->angka = $request->input('angka');
        $UridAcid->Periode = $request->input('periode');
        $UridAcid->save();

        return redirect('/profile')->with('success', 'Your Urid Acid Data Has Been Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(UridAcid $uridAcid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UridAcid $uridAcid)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUridAcidRequest $request, UridAcid $uridAcid)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UridAcid $uridAcid)
    {
        //
    }
}
