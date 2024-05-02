<?php

namespace App\Http\Controllers;

use App\Models\LabConcrete;
use App\Models\MixingConcrete;
use App\Http\Requests\StoreLabConcreteRequest;
use App\Http\Requests\UpdateLabConcreteRequest;
use Illuminate\Http\Request;

class LabConcreteController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // $labconcrete = LabConcrete::where('mixingconcrete_id',  1)->get();
        // dump($labconcrete);
        $labconcretes = LabConcrete::all();
        $mixingconcretes = MixingConcrete::all()->sortByDesc('created_at');
        // $allMarke = MixingConcrete::select('marke')->distinct()->orderBy('marke')->get()->pluck('marke')->toArray();
        // $mixingconcretes = MixingConcrete::orderBy('marke')->get();
        // $allMarke = LabConcrete::select('pagaminti_kubeliai_g')->distinct()->orderBy('pagaminti_kubeliai_g')->get()->pluck('pagaminti_kubeliai_g')->toArray();

        $sorts = LabConcrete::getSorts();
        $sortBy =$request->query('sort', '');
        $perPageSelect = LabConcrete::getPerPageSelect();
        $perPage = (int) $request->query('per_page', 0);
        // $mixingconcreteId = (int) $request->query('mixingconcrete_id', 0);
        // $markeId = $request->query('marke', '');

        $labconcretes = LabConcrete::query();
        // $labconcretes = $labconcretes->where('delete', 0);

        // if ($markeId !== '') {
        //     $labconcretes = $labconcretes->where('marke', $markeId);
        // }

        $labconcretes = match($sortBy) {
            'created_at_asc' => $labconcretes->orderBy('created_at'),
            'created_at_desc' => $labconcretes->orderByDesc('created_at'),
            default => $labconcretes,
        };

        if ($perPage > 0) {
            $labconcretes = $labconcretes->paginate($perPage)->withQueryString();
        } else {
            $labconcretes = $labconcretes->get();
            // $labconcretes = $labconcretes->get()->sortByDesc('created_at');
        }
        
        return view('labconcretes.index', [
            'labconcretes' => $labconcretes,
            'mixingconcretes' => $mixingconcretes,
            'sorts' => $sorts,
            'sortBy' => $sortBy,
            'perPageSelect' => $perPageSelect,
            'perPage' => $perPage,
            // 'markes' => $allMarke,
            // 'markesId' => $markeId,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $labconcretes = LabConcrete::all();
        $mixingconcretes = MixingConcrete::all();

        return view('labconcretes.create', [
            'labconcretes' => $labconcretes,
            'mixingconcretes' => $mixingconcretes,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLabConcreteRequest $request)
    {
        $labconcretes = LabConcrete::create($request->all())->id;

        return redirect()->route('labconcretes-create');
    }

    /**
     * Display the specified resource.
     */
    public function show(LabConcrete $labConcrete)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LabConcrete $labConcrete)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLabConcreteRequest $request, LabConcrete $labConcrete)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LabConcrete $labConcrete)
    {
        //
    }
}
