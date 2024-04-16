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
    public function index()
    {
        // $labconcrete = LabConcrete::where('mixingconcrete_id',  1)->get();
        // dump($labconcrete);
        $labconcretes = LabConcrete::all();
        $mixingconcretes = MixingConcrete::all()->sortByDesc('created_at');

        // $sorts = MixingConcrete::getSorts();
        // $sortBy =$request->query('sort', '');
        // $perPageSelect = MixingConcrete::getPerPageSelect();
        // $perPage = (int) $request->query('per_page', 2);
        // $s = $request->query('s', ''); // tai ko ieškom

        // $mixingconcretes = MixingConcrete::query();

        // $mixingconcretes = match($sortBy) {
        //     'created_at_asc' => $mixingconcretes->orderBy('created_at'),
        //     'created_at_desc' => $mixingconcretes->orderByDesc('created_at'),
        //     default => $mixingconcretes,
        // };

        // $mixingconcretes = $mixingconcretes->get();
        // $mixingconcretes = $mixingconcretes->paginate($perPage)->withQueryString();

        // if ($perPage > 0) {
        //     $mixingconcretes = $mixingconcretes->paginate($perPage)->withQueryString();
        // } else {
        //     $mixingconcretes = $mixingconcretes->get();
        // }

        // if ($s) {
        //     $mixingconcretes = $mixingconcretes
        //         ->where('marke', 'like', "%{$s}%");
        //         // ->orWhere('slankumo_klase', 'like', "%{$s}%");
        // }
        // if ($s) {
        //     $keywords = explode(' ', $s);
        //     if (count($keywords) > 1) {
        //         $mixingconcretes = $mixingconcretes->where(function ($query) use ($keywords) {
        //             foreach (range(0, 1) as $index) {
        //                 $query->orWhere('marke', 'like', '%'.$keywords[$index].'%')
        //                 ->where('slankumo_klase', 'like', '%'.$keywords[1 - $index].'%');
        //             }
        //         });
        //     } else {
        //         $mixingconcretes = $mixingconcretes
        //             ->where('marke', 'like', "%{$s}%")
        //             ->orWhere('slankumo_klase', 'like', "%{$s}%");
        //     }
        // }
        
        return view('labconcretes.index', [
            'labconcretes' => $labconcretes,
            'mixingconcretes' => $mixingconcretes,
            // 'sorts' => $sorts,
            // 'sortBy' => $sortBy,
            // 'perPageSelect' => $perPageSelect,
            // 'perPage' => $perPage,
            // 's' => $s,
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
