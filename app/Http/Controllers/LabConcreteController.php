<?php

namespace App\Http\Controllers;

use App\Models\LabConcrete;
use App\Models\MixingConcrete;
use App\Http\Requests\StoreLabConcreteRequest;
use App\Http\Requests\UpdateLabConcreteRequest;

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
        $mixingconcretes = MixingConcrete::all();
        
        return view('labconcretes.index', [
            'labconcretes' => $labconcretes,
            'mixingconcretes' => $mixingconcretes,
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
