@extends('layouts.app')

<div class="fonas_betonas">
    @section('content')
    @php
    $createMixingConcretesFormos1 = [
        // [
        //     'label' => 'Delete',
        //     'type' => 'hidden',
        //     'name' => 'delete',
        //     'aprasas' => 'Ištrinimo ligis',
        // ],
        [
            'label' => 'Maišykles ID',
            'type' => 'text',
            'name' => 'maisikles_id',
            'aprasas' => 'Maišykles ID',
        ],
        // [
        //     'label' => 'Maišykles recepto ID',
        //     'type' => 'hidden',
        //     'name' => 'maisikles_recepto_id',
        //     'aprasas' => 'Maišykles recepto ID',
        // ],
        // [
        //     'label' => 'Darbotojo ID maiše',
        //     'type' => 'hidden',
        //     'name' => 'user_maise_id',
        //     'aprasas' => 'Kas maiše ID',
        // ],
        // [
        //     'label' => 'Darbotojo ID koregavo',
        //     'type' => 'hidden',
        //     'name' => 'user_edit_id',
        //     'aprasas' => 'Kas koregavo ID',
        // ],
        // [
        //     'label' => 'Koregavimo Data',
        //     'type' => 'datetime-local',
        //     'name' => 'edit_data',
        //     'aprasas' => 'Koregavimo Data',
        // ],
        // [
        //     'label' => 'Maišymo Data',
        //     'type' => 'datetime-local',
        //     'name' => 'maisimo_data',
        //     'aprasas' => 'Maišymo Data',
        // ],
        [
            'label' => 'Marke',
            'type' => 'text',
            'name' => 'marke',
            'aprasas' => 'Betono Marke',
        ],
        [
            'label' => 'Slankumas',
            'type' => 'text',
            'name' => 'slankumo_klase',
            'aprasas' => 'Slankumo klasė',
        ],
        [
            'label' => 'Typas',
            'type' => 'text',
            'name' => 'tipas',
            'aprasas' => 'Typas (SB, B)',
        ],
        [
            'label' => 'XF / F',
            'type' => 'text',
            'name' => 'salcio_priedai',
            'aprasas' => 'Šalcio priedai',
        ],
        [
            'label' => 'Pagaminti kubeliai vnt',
            'type' => 'text',
            'name' => 'pagaminti_kubeliai',
            'aprasas' => 'Pagaminti kubelių kiekis',
        ],
        [
            'label' => 'Maišyklė',
            'type' => 'text',
            'name' => 'maisykle',
            'aprasas' => 'Su kuria maišyklė maiše',
        ],
        [
            'label' => 'Kiekis, m3',
            'type' => 'text',
            'name' => 'kiekis_m3',
            'aprasas' => 'Betono turis',
        ],
        [
            'label' => 'Užsakymo nr',
            'type' => 'text',
            'name' => 'uzsakymo_nr',
            'aprasas' => 'Užsakymo Indentifikacijos numeris',
        ],
        // [
        //     'label' => 'Bukle',
        //     'type' => 'text',
        //     'name' => '	uzsakymo_raide',
        //     'aprasas' => 'Užsakymo indexas',
        // ],
        // [
        //     'label' => 'Užsakovas',
        //     'type' => 'text',
        //     'name' => 'uzsakovas',
        //     'aprasas' => 'Klientas',
        // ],
        // [
        //     'label' => 'Komentarai',
        //     'type' => 'text',
        //     'name' => 'komentaras',
        //     'aprasas' => 'Papildoma informacija',
        // ],
    ];
    $kubeliuMerkeFormos1 = [
        [
            'label' => 'C8/10',
            'type' => 'text',
        ],
        [
            'label' => 'C12/15',
            'type' => 'text',
        ],
        [
            'label' => 'C16/20',
            'type' => 'text',
        ],
        [
            'label' => 'C20/25',
            'type' => 'text',
        ],
        [
            'label' => 'C25/30',
            'type' => 'text',
        ],
        [
            'label' => 'C30/37',
            'type' => 'text',
        ],
        [
            'label' => 'C35/45',
            'type' => 'text',
        ],
        [
            'label' => 'C40/50',
            'type' => 'text',
        ],
        [
            'label' => 'C45/55',
            'type' => 'text',
        ],
    ];
    $kubeliuSalcioIndexasForma1 = [
        [
            'label' => 'F50',
        ],
        [
            'label' => 'F100',
        ],
        [
            'label' => 'F150',
        ],
        [
            'label' => 'F200',
        ],
        [
            'label' => 'F250',
        ],
        [
            'label' => 'F300',
        ],
        [
            'label' => 'XF1',
        ],
        [
            'label' => 'XF2',
        ],
        [
            'label' => 'XF3',
        ],
        [
            'label' => 'XF4',
        ],
    ];
    $pagamintiKubeliai = [
        [
            'label' => 'Gamyba+XF/F',
            'bukle' => '/^G/',
            'salcioPredas' => 'null',
        ],
        [
            'label' => 'Pardavimai+XF/F',
            'bukle' => '/^P/',
            'salcioPredas' => 'null',
        ],
        [
            'label' => 'Gamyba',
            'bukle' => '/^G/',
            'salcioPredas' => 'null',
        ],
        [
            'label' => 'Pardavimai',
            'bukle' => '/^P/',
            'salcioPredas' => 'null',
        ],
    ];
    
    // $filteredData = [];
    // $maxYear = 0;
    // $maxWeek = 0;
    // foreach ($mixingconcretes as $mixingconcrete) {
    //     $created_at = \Carbon\Carbon::parse($mixingconcrete->created_at);
    //     $year = $created_at->year;
    //     $week = $created_at->weekOfYear;
    
    //     $maxYear = max($maxYear, $year);
    //     $maxWeek = max($maxWeek, $week);
    
    //     $key = $year . '-' . $week;
    
    //     if (!isset($filteredData[$key])) {
    //         $filteredData[$key] = [];
    //     }
    
    //     $filteredData[$key][] = $mixingconcrete;
    // }
    
    // Nustatome naujausius metus ir savaitės numerius
    // $currentYear = $maxYear;
    // $currentWeek = $maxWeek;
    @endphp
    <div class="container">
        <div class="row justify-content-center">
    
            <div class="col-md-12 mb-4 naujas_maisimas">
                <div class="card" style="background-color: #fffd">
                    <div class="card-header">Betono labaratojija</div>
    
                        <form action="{{route('mixingconcretes-store')}}" method="post">
                            <table>
                                <thead>
                                    <tr>
                                        @foreach ($createMixingConcretesFormos1 as $createMixingConcretesForma1)
                                        <th>{{ $createMixingConcretesForma1['label'] }}</th>
                                        @endforeach
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <div class="form-group mb-3"><input type="hidden" class="form-control" value="0" placeholder="" name="delete"></div>
                                        <td class="form-group mb-3"><input type="text" class="form-control" value="" placeholder="Maišykles ID" name="maisikles_id"></td>
                                        <div class="form-group mb-3"><input type="hidden" class="form-control" value="0" placeholder="" name="maisikles_recepto_id"></div>
                                        <div class="form-group mb-3"><input type="hidden" class="form-control" value="0" placeholder="" name="user_maise_id"></div>
                                        <div class="form-group mb-3"><input type="hidden" class="form-control" value="0" placeholder="" name="user_edit_id"></div>
                                        <td class="form-group mb-3"><input type="text" class="form-control" value="" placeholder="Marke" name="marke"></td>
                                        <td class="form-group mb-3"><input type="text" class="form-control" value="" placeholder="Slankumas" name="slankumo_klase"></td>
                                        <td class="form-group mb-3"><input type="text" class="form-control" value="" placeholder="Typas" name="tipas"></td>
                                        <td class="form-group mb-3"><input type="text" class="form-control" value="" placeholder="XF / F" name="salcio_priedai"></td>
                                        <td class="form-group mb-3"><input type="text" class="form-control" value="" placeholder="Pagaminti kubeliai vnt." name="pagaminti_kubeliai"></td>
                                        <td class="form-group mb-3"><input type="text" class="form-control" value="" placeholder="Maišyklė" name="maisykle"></td>
                                        <td class="form-group mb-3"><input type="text" class="form-control" value="" placeholder="Kiekis, m3" name="kiekis_m3"></td>
                                        <td class="form-group mb-3"><input type="text" class="form-control" value="" placeholder="Užsakymo Nr" name="uzsakymo_nr"></td>
                                    </tr>
                                </tbody>
                            </table>
    
                            <button style="width: 90%" type="submit" class="btn btn-outline-primary m-1">Pridėti nauja maišyma</button>
                            {{-- <a href="{{ route('clients-index')}}" class="btn btn-secondary m-1">Atšaukti</a> --}}
                            @csrf
                            {{-- @method('put') --}}
                        </form>
    
                    </div>
                </div>
            </div>
    
        </div>
    </div>
</div>
@endsection

@section('title', 'Betono maišymas')