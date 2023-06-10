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
        $arrayTemp = [];
        $arrayTp = [];
        $arrayA = [];
        $arrayT = []; 
        $user = Auth::id();
        $UridAcid = session('UridAcid');
        $Glucose = session('Glucose');
        $Kolesterol = session('Kolesterol');
        $BloodPress = session('BloodPress');
        $GlucoseDate = session('GlucoseData');
        $UridData = session('UridData');
        $KolesData = session('KolesData');
        $BloodData = session('BloodData');



        $queryGlucose = Glucose::select('angka')->whereRaw('uid = ' . $user . ' AND YEAR(Periode) = 2023 AND MONTH(Periode) BETWEEN 1 AND 12')->get();

        $i = 0;
        foreach ($queryGlucose as $el) {
            $arrayTemp[$i] = $el->angka;
            $i++;
        }

        $arrayGlucose = json_encode($arrayTemp);


        $queryBlood = BloodPress::select('angka')->whereRaw('uid = ' . $user . ' AND YEAR(Periode) = 2023 AND MONTH(Periode) BETWEEN 1 AND 12')->get();

        $i = 0;
        foreach ($queryBlood as $w) {
            $arrayTp[$i] = $w->angka;
            $i++;
        }

        $arrayBlood = json_encode($arrayTp);

        $queryUrid = UridAcid::select('angka')->whereRaw('uid = ' . $user . ' AND YEAR(Periode) = 2023 AND MONTH(Periode) BETWEEN 1 AND 12')->get();

        $i = 0;
        foreach ($queryUrid as $c) {
            $arrayA[$i] = $c->angka;
            $i++;
        }

        $arrayUrid = json_encode($arrayA);

        $queryKol = Kolesterol::select('angka')->whereRaw('uid = ' . $user . ' AND YEAR(Periode) = 2023 AND MONTH(Periode) BETWEEN 1 AND 12')->get();

        $i = 0;
        foreach ($queryKol as $d) {
            $arrayT[$i] = $d->angka;
            $i++;
        }

        $arrayKol = json_encode($arrayT);


        return view('dashboard', [
            'halaman' => 'GoWell : Dashboard',
            'css' => 'dashboard.css',
            'UridAcid' => $UridAcid ?: UridAcid::where('uid', $user)->orderBy('Periode', 'desc')->first(),
            'Kolesterol' => $Kolesterol ?: Kolesterol::where('uid', $user)->orderBy('Periode', 'desc')->first(),
            'BloodPress' => $BloodPress ?: BloodPress::where('uid', $user)->orderBy('Periode', 'desc')->first(),
            'Glucose' => $Glucose ?: Glucose::where('uid', $user)->orderBy('Periode', 'desc')->first(),
            'GlucoseData' => $GlucoseDate ?: $arrayGlucose,
            'KolesData' => $KolesData ?: $arrayKol,
            'BloodData' => $BloodData ?: $arrayBlood,
            'UridData' => $UridData ?: $arrayUrid,
        ]);
    }
    public function UridAcid(Request $request)
    {
        $user = Auth::id();
        $tahun = $request->input('tahun');
        $UridAcid = UridAcid::whereYear('Periode', $tahun)
            ->where('uid', $user)
            ->orderBy('Periode', 'desc')->first();

        $query = UridAcid::select('angka')->whereRaw('uid = ' . $user . ' AND YEAR(Periode) = ' . $tahun . ' AND MONTH(Periode) BETWEEN 1 AND 12')->get();

        $i = 0;
        foreach ($query as $el) {
            $arrayTemp[$i] = $el->angka;
            $i++;
        }

        $arrayTemp = json_encode($arrayTemp);

        $UridData = $arrayTemp;
        return redirect('/dashboard')->with('UridAcid', $UridAcid)->with('UridData', $UridData);
    }
    public function Glucose(Request $request)
    {
        $user = Auth::id();
        $tahun = $request->input('tahun');
        $Glucose = Glucose::whereYear('Periode', $tahun)
            ->where('uid', $user)->orderBy('Periode', 'desc')->first();

        $query = Glucose::select('angka')->whereRaw('uid = ' . $user . ' AND YEAR(Periode) = ' . $tahun . ' AND MONTH(Periode) BETWEEN 1 AND 12')->get();

        $i = 0;
        foreach ($query as $el) {
            $arrayTemp[$i] = $el->angka;
            $i++;
        }

        $arrayTemp = json_encode($arrayTemp);

        $GlucoseData = $arrayTemp;
        return redirect('/dashboard')->with('Glucose', $Glucose)->with('GlucoseData', $GlucoseData);
    }
    public function Kolesterol(Request $request)
    {
        $user = Auth::id();
        $tahun = $request->input('tahun');
        $Kolesterol = Kolesterol::whereYear('Periode', $tahun)
            ->where('uid', $user)
            ->orderBy('Periode', 'desc')->first();

        $query = Kolesterol::select('angka')->whereRaw('uid = ' . $user . ' AND YEAR(Periode) = ' . $tahun . ' AND MONTH(Periode) BETWEEN 1 AND 12')->get();

        $i = 0;
        foreach ($query as $el) {
            $arrayTemp[$i] = $el->angka;
            $i++;
        }

        $arrayTemp = json_encode($arrayTemp);

        $KolesData = $arrayTemp;
        return redirect('/dashboard')->with('Kolesterol', $Kolesterol)->with('KolesData', $KolesData);
    }
    public function BloodPress(Request $request)
    {
        $user = Auth::id();
        $tahun = $request->input('tahun');
        $BloodPress = BloodPress::whereYear('Periode', $tahun)
            ->where('uid', $user)
            ->orderBy('Periode', 'desc')->first();
        $query = BloodPress::select('angka')->whereRaw('uid = ' . $user . ' AND YEAR(Periode) = ' . $tahun . ' AND MONTH(Periode) BETWEEN 1 AND 12')->get();

        $i = 0;
        foreach ($query as $el) {
            $arrayTemp[$i] = $el->angka;
            $i++;
        }

        $arrayTemp = json_encode($arrayTemp);

        $BloodData = $arrayTemp;
        return redirect('/dashboard')->with('BloodPress', $BloodPress)->with('BloodData', $BloodData);
    }
}