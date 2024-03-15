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
        [
            'label' => 'Užsakovas',
            'type' => 'text',
            'name' => 'uzsakovas',
            'aprasas' => 'Klientas',
        ],
        [
            'label' => 'Komentarai',
            'type' => 'text',
            'name' => 'komentaras',
            'aprasas' => 'Papildoma informacija',
        ],
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
    @endphp
    <div class="container">
        <div class="row justify-content-center">
    
            <div class="col-md-12 mb-4 naujas_maisimas">
                <div class="card" style="background-color: #fffd">
                    <div class="card-header">Betonas </div>
    
                    <div class="card-body">
                        <div>
                            <a href="{{route('mixingconcretes-index')}}" class="btn btn-secondary m-1">Visi maišimai</a>
                        </div>
                    </div>
                </div>
            </div>
    
        </div>
    </div>
</div>
@endsection

@section('title', 'Betono informacija')