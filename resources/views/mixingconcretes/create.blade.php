@extends('layouts.app')

@section('content')
<?php
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
            'label' => 'C30/35',
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
?>
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-12 pagaminti_kubeliai">
            <div class="card">
                <div class="card-header">Pagaminti kubeliai</div>
                <table>
                    <thead>
                            <tr>
                                @foreach ($kubeliuMerkeFormos1 as $kubeliuMerkeForma1)
                                <th class="form-group mb-3">
                                    {{ $kubeliuMerkeForma1['label'] }}
                                </th>
                                @endforeach
                            </tr>
                            <tr>
                                @foreach ($kubeliuMerkeFormos1 as $kubeliuMerkeForma1)
                                <th class="form-group mb-3">
                                    {{ $kubeliuMerkeForma1['label'] }}
                                </th>
                                @endforeach
                            </tr>
                            <tr>
                                @foreach ($kubeliuMerkeFormos1 as $kubeliuMerkeForma1)
                                <th class="form-group mb-3">
                                    {{ $kubeliuMerkeForma1['label'] }}
                                </th>
                                @endforeach
                            </tr>
                            <tr>
                                @foreach ($kubeliuMerkeFormos1 as $kubeliuMerkeForma1)
                                <th class="form-group mb-3">
                                    {{ $kubeliuMerkeForma1['label'] }}
                                </th>
                                @endforeach
                            </tr>
                    </thead>

                    <tbody>
                        <tr>
                            @foreach ($createMixingConcretesFormos1 as $createMixingConcretesForma1)
                            <td></td>
                            @endforeach
                        </tr>
                    </tbody>
                </table>
                <div class="card-body"></div>
            </div>
        </div>

        <div class="col-md-12 naujas_maisimas">
            <div class="card">
                <div class="card-header">Naujas maišymas</div>

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
                                    <td class="form-group mb-3"><input type="text" class="form-control" value="" placeholder="Užsakovas" name="uzsakovas"></td>
                                    <td class="form-group mb-3"><input type="text" class="form-control" value="" placeholder="Komentaras" name="komentaras"></td>
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

        <div class="col-md-12 maisimo_duonbaze">
            <div class="card">
                <div class="card-header">Maišymo duonbaze</div>

                <div class="card-body">

                    <table>
                        <thead>
                            <tr>
                                <th>Maišymo data</th>
                                @foreach ($createMixingConcretesFormos1 as $createMixingConcretesForma1)
                                <th>{{ $createMixingConcretesForma1['label'] }}</th>
                                @endforeach
                                <th>Veiksmai</th>
                            </tr>
                        </thead>
    
                        <tbody>
                            @forelse ($mixingconcretes as $mixingconcrete)
                            <tr>
                                <td>{{ $mixingconcrete->created_at }}</td>
                                @foreach ($createMixingConcretesFormos1 as $createMixingConcretesForma1)
                                <td>{{ $mixingconcrete->{ $createMixingConcretesForma1['name'] } }}</td>
                                @endforeach

                                <td>
                                    <a href="{{ route('mixingconcretes-edit', $mixingconcrete->id)}}" class="btn btn-success m-1">Redaguoti</a>
                                    <a href="{{ route('mixingconcretes-delete', $mixingconcrete->id)}}" class="btn btn-danger m-1">Trinti</a>
                                </td>

                            </tr>
                            @empty
                            <tr>
                                <td colspan="3">Maišimų nėra</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

    </div>
</div>
@endsection

@section('title', 'Betono maišymas')