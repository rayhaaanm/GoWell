<?php

namespace App\Http\Controllers;

use App\Models\BloodPress;
use App\Http\Requests\StoreBloodPressRequest;
use App\Http\Requests\UpdateBloodPressRequest;
use Auth;
use Illuminate\Http\Request;

class BloodPressController extends Controller
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
        $BloodPress = new BloodPress;
        $BloodPress->uid = $user->id;
        $BloodPress->angka = $request->input('angka');
        $BloodPress->Periode = $request->input('periode');
        $BloodPress->save();

        return redirect('/profile')->with('success', 'Your Blood Press Data Has Been Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(BloodPress $bloodPress)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BloodPress $bloodPress)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBloodPressRequest $request, BloodPress $bloodPress)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BloodPress $bloodPress)
    {
        //
    }
}
