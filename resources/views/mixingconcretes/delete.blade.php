@extends('layouts.app')

<div class="fonas_betonas">
    @section('content')
    <?php
        $createMixingConcretesFormos1 = [
            [
                'label' => 'Maišymo data',
                'type' => 'text',
                'name' => 'created_at',
                'aprasas' => 'Maišymo data',
            ],
            // [
            //     'label' => 'Delete',
            //     'type' => 'text',
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
            //     'type' => 'text',
            //     'name' => 'maisikles_recepto_id',
            //     'aprasas' => 'Maišykles recepto ID',
            // ],
            // [
            //     'label' => 'Darbotojo ID maiše',
            //     'type' => 'text',
            //     'name' => 'user_maise_id',
            //     'aprasas' => 'Kas maiše ID',
            // ],
            // [
            //     'label' => 'Darbotojo ID koregavo',
            //     'type' => 'text',
            //     'name' => 'user_edit_id',
            //     'aprasas' => 'Kas koregavo ID',
            // ],
            // [
            //     'label' => 'Koregavimo Data',
            //     'type' => 'date',
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
                'label' => 'Pagaminti kubeliai',
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
    ?>
    <div class="container">
        <div class="row justify-content-center maisimo_duonbaze">
            <div class="col-md-12">
                <div class="card" style="background-color: #fffd">
                    <div class="card-header">Ar tikrai nori ištrinti?</div>
    
                    <div class="card-body">
                        <form action="{{route('mixingconcretes-destroy', $mixingconcrete)}}" method="post">
    
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
                                        @foreach ($createMixingConcretesFormos1 as $createMixingConcretesForma1)
                                        <td>{{ $mixingconcrete->{ $createMixingConcretesForma1['name'] } }}</td>
                                        @endforeach
                                    </tr>
                                </tbody>
                            </table>
    
                            <button type="submit" class="btn btn-danger m-1">Ištrinti</button>
                            <a href="{{ route('mixingconcretes-index') }}" class="btn btn-secondary m-1">Atšaukti</a>
                            @csrf
                            @method('delete')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('title', 'Pastvirtinti trinimą')