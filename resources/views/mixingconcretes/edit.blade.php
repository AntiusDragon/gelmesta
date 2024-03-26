@extends('layouts.app')

<div class="fonas_betonas">
    @section('content')
    @php
    $createMixingConcretesFormos1 = [
        [
            'label' => 'Maišymo data',
            'type' => 'text',
            'name' => 'created_at',
            'aprasas' => 'Maišymo data',
        ],
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
            'label' => 'Pagaminti kubeliai "G" vnt',
            'type' => 'text',
            'name' => 'pagaminti_kubeliai_g',
            'aprasas' => 'Pagaminti kubelių kiekis',
        ],
        [
            'label' => 'Pagaminti kubeliai "P" vnt',
            'type' => 'text',
            'name' => 'pagaminti_kubeliai_p',
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
        [
            'label' => 'Bukle',
            'type' => 'text',
            'name' => '	uzsakymo_raide',
            'aprasas' => 'Užsakymo indexas',
        ],
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
    
            <div class="col-md-12 naujas_maisimas">
                <div class="card" style="background-color: #fffd">
                    <div class="card-header">Keisti maišymo duomenis</div>
    
                    <div class="card-body">
    
                        <form action="{{route('mixingconcretes-update', $mixingconcrete)}}" method="post">
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
                                        <td class="form-group mb-3"><input type="text" class="form-control" value="{{$mixingconcrete->created_at}}" placeholder="Maišykles ID" name="created_at"></td>
                                        <div class="form-group mb-3"><input type="hidden" class="form-control" value="0" placeholder="" name="delete"></div>
                                        <td class="form-group mb-3"><input type="text" class="form-control" value="{{$mixingconcrete->maisikles_id}}" placeholder="Maišykles ID" name="maisikles_id"></td>
                                        <div class="form-group mb-3"><input type="hidden" class="form-control" value="0" placeholder="" name="maisikles_recepto_id"></div>
                                        <div class="form-group mb-3"><input type="hidden" class="form-control" value="0" placeholder="" name="user_maise_id"></div>
                                        <div class="form-group mb-3"><input type="hidden" class="form-control" value="0" placeholder="" name="user_edit_id"></div>
                                        <td class="form-group mb-3"><input type="text" class="form-control" value="{{$mixingconcrete->marke}}" placeholder="Marke" name="marke"></td>
                                        <td class="form-group mb-3"><input type="text" class="form-control" value="{{$mixingconcrete->slankumo_klase}}" placeholder="Slankumas" name="slankumo_klase"></td>
                                        <td class="form-group mb-3"><input type="text" class="form-control" value="{{$mixingconcrete->tipas}}" placeholder="Typas" name="tipas"></td>
                                        <td class="form-group mb-3"><input type="text" class="form-control" value="{{$mixingconcrete->salcio_priedai}}" placeholder="XF / F" name="salcio_priedai"></td>
                                        <td class="form-group mb-3"><input type="text" class="form-control" value="{{$mixingconcrete->pagaminti_kubeliai_g}}" placeholder="Pagaminti kubeliai &quot;G&quot; vnt." name="pagaminti_kubeliai_g"></td>
                                        <td class="form-group mb-3"><input type="text" class="form-control" value="{{$mixingconcrete->pagaminti_kubeliai_p}}" placeholder="Pagaminti kubeliai &quot;P&quot; vnt." name="pagaminti_kubeliai_p"></td>
                                        <td class="form-group mb-3"><input type="text" class="form-control" value="{{$mixingconcrete->maisykle}}" placeholder="Maišyklė" name="maisykle"></td>
                                        <td class="form-group mb-3"><input type="text" class="form-control" value="{{$mixingconcrete->kiekis_m3}}" placeholder="Kiekis, m3" name="kiekis_m3"></td>
                                        <td class="form-group mb-3"><input type="text" class="form-control" value="{{$mixingconcrete->uzsakymo_nr}}" placeholder="Užsakymo Nr" name="uzsakymo_nr"></td>
                                        <td class="form-group mb-3"><input type="text" class="form-control" value="{{$mixingconcrete->uzsakymo_raide}}" placeholder="Užsakymo Nr" name="uzsakymo_raide"></td>
                                        <td class="form-group mb-3"><input type="text" class="form-control" value="{{$mixingconcrete->uzsakovas}}" placeholder="Užsakovas" name="uzsakovas"></td>
                                        <td class="form-group mb-3"><input type="text" class="form-control" value="{{$mixingconcrete->komentaras}}" placeholder="Komentaras" name="komentaras"></td>
                                    </tr>
                                </tbody>
                            </table>
    
                            <div class="btn_centras">
                                <button style="width: 49%" type="submit" class="btn btn-outline-primary m-1">Keisti</button>
                                @csrf
                                @method('put')
                                <a style="width: 49%" href="{{ route('mixingconcretes-index') }}" class="btn btn-secondary m-1">Atšaukti</a>
                            </div>
                        </form>
    
                        <form action="{{route('mixingconcretes-update', $mixingconcrete)}}" method="post">
                            <div class="form-group mb-3"><input type="hidden" class="form-control" value="1" placeholder="" name="delete"></div>
                            <div class="form-group mb-3"><input type="hidden" class="form-control" value="{{$mixingconcrete->maisikles_id}}" placeholder="Maišykles ID" name="maisikles_id"></div>
                            <div class="form-group mb-3"><input type="hidden" class="form-control" value="0" placeholder="" name="maisikles_recepto_id"></div>
                            <div class="form-group mb-3"><input type="hidden" class="form-control" value="0" placeholder="" name="user_maise_id"></div>
                            <div class="form-group mb-3"><input type="hidden" class="form-control" value="0" placeholder="" name="user_edit_id"></div>
                            <div class="form-group mb-3"><input type="hidden" class="form-control" value="{{$mixingconcrete->marke}}" placeholder="Marke" name="marke"></div>
                            <div class="form-group mb-3"><input type="hidden" class="form-control" value="{{$mixingconcrete->slankumo_klase}}" placeholder="Slankumas" name="slankumo_klase"></div>
                            <div class="form-group mb-3"><input type="hidden" class="form-control" value="{{$mixingconcrete->tipas}}" placeholder="Typas" name="tipas"></div>
                            <div class="form-group mb-3"><input type="hidden" class="form-control" value="{{$mixingconcrete->salcio_priedai}}" placeholder="XF / F" name="salcio_priedai"></div>
                            <div class="form-group mb-3"><input type="hidden" class="form-control" value="{{$mixingconcrete->pagaminti_kubeliai_g}}" placeholder="Pagaminti kubeliai &quot;G&quot; vnt." name="pagaminti_kubeliai_g"></div>
                            <div class="form-group mb-3"><input type="hidden" class="form-control" value="{{$mixingconcrete->pagaminti_kubeliai_p}}" placeholder="Pagaminti kubeliai &quot;P&quot; vnt." name="pagaminti_kubeliai_p"></div>
                            <div class="form-group mb-3"><input type="hidden" class="form-control" value="{{$mixingconcrete->maisykle}}" placeholder="Maišyklė" name="maisykle"></div>
                            <div class="form-group mb-3"><input type="hidden" class="form-control" value="{{$mixingconcrete->kiekis_m3}}" placeholder="Kiekis, m3" name="kiekis_m3"></div>
                            <div class="form-group mb-3"><input type="hidden" class="form-control" value="{{$mixingconcrete->uzsakymo_nr}}" placeholder="Užsakymo Nr" name="uzsakymo_nr"></div>
                            <div class="form-group mb-3"><input type="hidden" class="form-control" value="{{$mixingconcrete->uzsakovas}}" placeholder="Užsakovas" name="uzsakovas"></div>
                            <div class="form-group mb-3"><input type="hidden" class="form-control" value="{{$mixingconcrete->komentaras}}" placeholder="Komentaras" name="komentaras"></div>
    
                            <div class="btn_centras">
                                <button style="width: 98.5%" type="submit" class="btn btn-outline-danger m-1">Trinti</button>
                                @csrf
                                @method('put')
                            </div>
                        </form>
    
                    </div>
                </div>
            </div>
    
        </div>
    </div>
</div>
@endsection

@section('title', 'Maišymo duomenų keitimas')