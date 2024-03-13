<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\MixingConcrete;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

//     public function displayConcreteMixes()
// {
//     // Gaukime didžiausią metų skaičių
//     $maxYear = MixingConcrete::max(DB::raw('YEAR(created_at)'));
    
//     // Gaukime paskutinę savaitę, kurioje buvo bent vienas "salcio_priedai" įrašas
//     $lastWeekWithAdditives = MixingConcrete::whereNotNull('salcio_priedai')
//                                 ->where(DB::raw('YEARWEEK(created_at)'), '=', DB::raw('YEARWEEK(NOW()) - 1'))
//                                 ->exists();
    
//     // Gaukime bet kokią informaciją, kurios reikia lentelės pildymui
//     $concreteMixes = MixingConcrete::select('marke', 'pagaminti_kubeliai')
//                         ->where(DB::raw('YEAR(created_at)'), $maxYear)
//                         ->orderBy('marke')
//                         ->get();

//     return view('concrete.mixes', compact('concreteMixes', 'lastWeekWithAdditives'));
// }
}
