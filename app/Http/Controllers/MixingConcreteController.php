<?php

namespace App\Http\Controllers;

use App\Models\MixingConcrete;
use App\Models\LabConcrete;
use App\Http\Requests\StoreMixingConcreteRequest;
use App\Http\Requests\UpdateMixingConcreteRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class MixingConcreteController extends Controller
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
        // $mixingconcretes = MixingConcrete::orderBy('created_at', 'desc')->get();
        // $mixingconcretes = MixingConcrete::all()->sortByDesc('created_at');

        $sorts = MixingConcrete::getSorts();
        $sortBy =$request->query('sort', '');
        $perPageSelect = MixingConcrete::getPerPageSelect();
        $perPage = (int) $request->query('per_page', 2);
        $s = $request->query('s', ''); // tai ko ieškom

        $mixingconcretes = MixingConcrete::query();
        $mixingconcretes = $mixingconcretes->where('delete', 0);

        $mixingconcretes = match($sortBy) {
            'created_at_asc' => $mixingconcretes->orderBy('created_at'),
            'created_at_desc' => $mixingconcretes->orderByDesc('created_at'),
            default => $mixingconcretes,
        };

        // $mixingconcretes = $mixingconcretes->get();
        // $mixingconcretes = $mixingconcretes->paginate($perPage)->withQueryString();

        if ($perPage > 0) {
            $mixingconcretes = $mixingconcretes->paginate($perPage)->withQueryString();
        } else {
            $mixingconcretes = $mixingconcretes->get();
        }

        if ($s) {
            $mixingconcretes = $mixingconcretes
                ->where('marke', 'like', "%{$s}%");
                // ->orWhere('slankumo_klase', 'like', "%{$s}%");
        }
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
        
        return view('mixingconcretes.index', [
            'mixingconcretes' => $mixingconcretes,
            'sorts' => $sorts,
            'sortBy' => $sortBy,
            'perPageSelect' => $perPageSelect,
            'perPage' => $perPage,
            's' => $s,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        // $mixingconcretes = MixingConcrete::all()->sortByDesc('created_at');

        $sorts = MixingConcrete::getSorts();
        $sortBy =$request->query('sort', '');
        // $perPageSelect = MixingConcrete::getPerPageSelect();
        // $perPage = (int) $request->query('per_page', 2);

        $mixingconcretes = MixingConcrete::query();
        
        // $today = Carbon::today();
        // $startOfLastWeek = Carbon::now()->startOfWeek()->subWeek();
        // $endOfLastWeek = Carbon::now()->endOfWeek()->subWeek();
        // $mixingconcretes = $mixingconcretes->where('delete', 0)
                                            // ->whereBetween('created_at', [$startOfWeek, $endOfWeek])
                                            // ->whereBetween('created_at', [$startOfLastWeek, $endOfLastWeek])
                                            // ->whereDate('created_at', $today)
                                            ;

        $mixingconcretes = match($sortBy) {
            'created_at_asc' => $mixingconcretes->orderBy('created_at'),
            'created_at_desc' => $mixingconcretes->orderByDesc('created_at'),
            default => $mixingconcretes,
        };

        // if ($perPage > 0) {
        //     $mixingconcretes = $mixingconcretes->paginate($perPage)->withQueryString();
        // } else {
            $mixingconcretes = $mixingconcretes->get()->sortByDesc('created_at');
        // }

        return view('mixingconcretes.create', [
            'mixingconcretes' => $mixingconcretes,
            'sorts' => $sorts,
            'sortBy' => $sortBy,
            // 'perPageSelect' => $perPageSelect,
            // 'perPage' => $perPage,
            // 's' => $s,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMixingConcreteRequest $request)
    {
        MixingConcrete::create($request->all());

        return redirect()->route('mixingconcretes-create');
    }

    /**
     * Display the specified resource.
     */
    public function show(MixingConcrete $mixingconcrete)
    {
        $labconcretes = LabConcrete::all();
        $mixingconcretes = MixingConcrete::all();

        return view('mixingconcretes.show', [
            // 'mixingconcrete' => $mixingconcrete,
            'labconcretes' => $labconcretes,
            'mixingconcretes' => $mixingconcretes,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MixingConcrete $mixingconcrete)
    {
        return view('mixingconcretes.edit', [
            'mixingconcrete' => $mixingconcrete,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMixingConcreteRequest $request, MixingConcrete $mixingconcrete)
    {
        $mixingconcrete->update($request->all());

        return redirect()->route('mixingconcretes-create');
    }

    /**
     * +Cinfirm remove the specified resource in storage.
     */

     public function delete(MixingConcrete $mixingconcrete)
     {
        return view('mixingconcretes.delete', [
            'mixingconcrete' => $mixingconcrete,
        ]);
     }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MixingConcrete $mixingconcrete)
    {
        $mixingconcrete->delete();
        
        return redirect()->route('mixingconcretes-create');
    }
}
