<?php

namespace App\Http\Controllers;

use App\Models\MixingConcrete;
use App\Http\Requests\StoreMixingConcreteRequest;
use App\Http\Requests\UpdateMixingConcreteRequest;

class MixingConcreteController extends Controller
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
    public function show(MixingConcrete $mixingconcrete)
    {
        return view('mixingconcretes.show', [
            'mixingconcrete' => $mixingconcrete,
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
