<?php

namespace App\Http\Controllers;

use App\Models\MixingConcrete;
use App\Http\Requests\StoreMixingConcreteRequest;
use App\Http\Requests\UpdateMixingConcreteRequest;

class MixingConcreteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mixingconcretes = MixingConcrete::all();
        
        return view('mixingconcretes.index', [
            'mixingconcretes' => $mixingconcretes,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mixingconcretes = MixingConcrete::all();
        return view('mixingconcretes.create', [
            'mixingconcretes' => $mixingconcretes,
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
    public function show(MixingConcrete $mixingConcrete)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MixingConcrete $mixingConcrete)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMixingConcreteRequest $request, MixingConcrete $mixingConcrete)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MixingConcrete $mixingConcrete)
    {
        //
    }
}
