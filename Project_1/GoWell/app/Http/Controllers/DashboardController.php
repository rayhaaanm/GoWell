<?php

namespace App\Http\Controllers;

use App\Models\BloodPress;
use App\Models\Glucose;
use App\Models\Kolesterol;
use App\Models\UridAcid;
use Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::id();
        $UridAcid = session('UridAcid');
        $Glucose = session('Glucose');
        $Kolesterol = session('Kolesterol');
        $BloodPress = session('BloodPress');
        return view('dashboard', [
            'halaman' => 'GoWell : Dashboard',
            'css' => 'dashboard.css',
            'UridAcid' => $UridAcid ?: UridAcid::where('uid', $user)->first(),
            'Kolesterol' => $Kolesterol ?: Kolesterol::where('uid', $user)->first(),
            'BloodPress' => $BloodPress ?: BloodPress::where('uid', $user)->first(),
            'Glucose' => $Glucose ?: Glucose::where('uid', $user)->first(),
        ]);
    }
    public function UridAcid(Request $request)
    {
        $user = Auth::id();
        $tahun = $request->input('tahun');
        $UridAcid = UridAcid::whereYear('Periode', $tahun)
            ->where('uid', $user)
            ->first();
        return redirect('/dashboard')->with('UridAcid', $UridAcid);
    }
    public function Glucose(Request $request)
    {
        $user = Auth::id();
        $tahun = $request->input('tahun');
        $Glucose = Glucose::whereYear('Periode', $tahun)
            ->where('uid', $user)
            ->first();
        return redirect('/dashboard')->with('Glucose', $Glucose);
    }
    public function Kolesterol(Request $request)
    {
        $user = Auth::id();
        $tahun = $request->input('tahun');
        $Kolesterol = Kolesterol::whereYear('Periode', $tahun)
            ->where('uid', $user)
            ->first();
        return redirect('/dashboard')->with('Kolesterol', $Kolesterol);
    }
    public function BloodPress(Request $request)
    {
        $user = Auth::id();
        $tahun = $request->input('tahun');
        $BloodPress = BloodPress::whereYear('Periode', $tahun)
            ->where('uid', $user)
            ->first();
        return redirect('/dashboard')->with('BloodPress', $BloodPress);
    }
}