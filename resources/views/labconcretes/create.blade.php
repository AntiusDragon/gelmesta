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
    $kubeliuBandimoZurnalasi1 = [
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
        // [
        //     'label' => 'Maišykles ID',
        //     'type' => 'text',
        //     'name' => 'maisikles_id',
        //     'aprasas' => 'Maišykles ID',
        // ],
        // [
        //     'label' => 'Maišykles recepto ID',
        //     'type' => 'hidden',
        //     'name' => 'maisikles_recepto_id',
        //     'aprasas' => 'Maišykles recepto ID',
        // ],
        // [
        //     'label' => 'Darbotojo ID pilde',
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
            'label' => 'Slankumas mm',
            'type' => 'text',
            'name' => 'slankumas_mm',
            'aprasas' => 'Slankumo klasė',
        ],
        // [
        //     'label' => 'Typas',
        //     'type' => 'text',
        //     'name' => 'tipas',
        //     'aprasas' => 'Typas (SB, B)',
        // ],
        [
            'label' => 'XF / F',
            'type' => 'text',
            'name' => 'salcio_priedai',
            'aprasas' => 'Šalcio priedai',
        ],
        // [
        //     'label' => 'Pagaminti kubeliai vnt',
        //     'type' => 'text',
        //     'name' => 'pagaminti_kubeliai',
        //     'aprasas' => 'Pagaminti kubelių kiekis',
        // ],
        [
            'label' => 'Maišyklė',
            'type' => 'text',
            'name' => 'maisykle',
            'aprasas' => 'Su kuria maišyklė maiše',
        ],
        // [
        //     'label' => 'Kiekis, m3',
        //     'type' => 'text',
        //     'name' => 'kiekis_m3',
        //     'aprasas' => 'Betono turis',
        // ],
        [
            'label' => 'Užsakymo nr',
            'type' => 'text',
            'name' => 'uzsakymo_nr',
            'aprasas' => 'Užsakymo Indentifikacijos numeris',
        ],
        [
            'label' => 'Bandinio plotis, mm',
            'type' => 'text',
            'name' => 'plotis_mm',
            'aprasas' => 'Bandinio plotis, mm',
        ],
        [
            'label' => 'Bandinio ilgis, mm',
            'type' => 'text',
            'name' => 'ilgis_mm',
            'aprasas' => 'Bandinio ilgis, mm',
        ],
        [
            'label' => 'Bandinio aukštis, mm',
            'type' => 'text',
            'name' => 'aukstis_mm',
            'aprasas' => 'Bandinio aukštis, mm',
        ],
        [
            'label' => 'Bandinio plotas, mm2',
            'type' => 'text',
            'name' => '',
            'aprasas' => 'Bandinio plotas, mm2',
        ],
        [
            'label' => 'Bandinio masė, g',
            'type' => 'text',
            'name' => '',
            'aprasas' => '',
        ],
        [
            'label' => 'Bandinio tūris, cm3',
            'type' => 'text',
            'name' => '',
            'aprasas' => '',
        ],
        [
            'label' => 'Bandinio tankis, g/cm3',
            'type' => 'text',
            'name' => '',
            'aprasas' => '',
        ],
        [
            'label' => 'Vidutinis serijos tankis, kg/m3',
            'type' => 'text',
            'name' => '',
            'aprasas' => '',
        ],
        [
            'label' => 'Ardančioji jėga, kN',
            'type' => 'text',
            'name' => 'ardancioji_jega_kn',
            'aprasas' => 'Ardančioji jėga, kN',
        ],
        [
            'label' => 'Pervedimo koeficientas',
            'type' => 'text',
            'name' => '',
            'aprasas' => 'Pervedimo koeficientas',
        ],
        [
            'label' => 'Bandinio stipris gniuždant, N/mm2',
            'type' => 'text',
            'name' => '',
            'aprasas' => 'Bandinio stipris gniuždant, N/mm2',
        ],
        [
            'label' => 'Vidutinis serijos stipris gniuždant, N/mm2',
            'type' => 'text',
            'name' => '',
            'aprasas' => 'Vidutinis serijos stipris gniuždant, N/mm2',
        ],
        [
            'label' => '>f(ck) -4',
            'type' => 'text',
            'name' => '',
            'aprasas' => '>f(ck) -4',
        ],
        [
            'label' => 'f(ck) -4',
            'type' => 'text',
            'name' => '',
            'aprasas' => '8.2.1.3.1 Atskirų rezultatų kriterijus. Taikomas ir pradinės ir nuolatinės gamybos metu. Reikalavimas atskiro (pavienio) bandymo rerzultatui fci ≥ (fck-4) N/mm².',
        ],
        [
            'label' => 'fcm,3',
            'type' => 'text',
            'name' => '',
            'aprasas' => '8.2.1.3.2. A metodas. Pradinė gamyba. (2) persidengiančių ar nepersidengiančių rezultatų trejeto vidurkis t. b. ≥ [+4 MPa]. Pateikti paskutinių rezultatų trejeto vidurkiai (ir persidengia ir nepersidengia).',
        ],
        [
            'label' => '>f(ck)+4',
            'type' => 'text',
            'name' => '',
            'aprasas' => '>f(ck)+4',
        ],
        [
            'label' => 'f(ck)+4',
            'type' => 'text',
            'name' => '',
            'aprasas' => '8.2.1.3.2 Vidutinių rezultatų kriterijus. A metodas. Pradinė gamyba. Reikalavimas rezultatų trejeto vidurkiui fcm,3 ≥ (fck + 4) N/mm²',
        ],
        [
            'label' => 'f(cm)',
            'type' => 'text',
            'name' => '',
            'aprasas' => '',
        ],
        [
            'label' => '>',
            'type' => 'text',
            'name' => '',
            'aprasas' => '',
        ],
        [
            'label' => 'f(ck)+1,48*sigma',
            'type' => 'text',
            'name' => '',
            'aprasas' => '',
        ],
        [
            'label' => 'σ35',
            'type' => 'text',
            'name' => '',
            'aprasas' => 'Tikrina 15-os paskutinių rezultatų standartinį nuokrypį gavus kiekvieną naują gniuždymo stiprio rezultatą. Jeigu jis telpa į ribas 0,63·σ(35 ar 3 mėn.) ≤ s15 ≤ 1,37·σ(35 ar 3 mėn), lieka tas pats "senas" standartinis nuokrypis iš 35 pirmųjų rezultatų ar 3 mėn. (kas daugiau), ar, kai netenkino paskutinį kartą, suskaičiuotas iš paskutiniųjų 35 rezultatų.',
        ],
        [
            'label' => '0.63* vid. Kvadr. Nuokrypis',
            'type' => 'text',
            'name' => '',
            'aprasas' => '',
        ],
        [
            'label' => 'S15',
            'type' => 'text',
            'name' => '',
            'aprasas' => 'Skaičiuoja paskutiniųjų 15 rezultatų standartinį nuokrypį s15',
        ],
        [
            'label' => '1.37* vid. Kvadr. Nuokrypis',
            'type' => 'text',
            'name' => '',
            'aprasas' => '',
        ],
        // [
        //     'label' => 'sum(fci-fcm)^2 ',
        //     'type' => 'text',
        //     'name' => '',
        //     'aprasas' => '',
        // ],
        // [
        //     'label' => 'vid kvadr nuokrypis',
        //     'type' => 'text',
        //     'name' => '',
        //     'aprasas' => '',
        // ],
        [
            'label' => 'FCK',
            'type' => 'text',
            'name' => '',
            'aprasas' => '',
        ],
        [
            'label' => 'Aprašas',
            'type' => 'text',
            'name' => '',
            'aprasas' => '',
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
    <div class="
    {{-- container --}}
    ">
        <div class="row justify-content-center">
    
            <div class="col-md-12 mb-4 maisimo_duonbaze">
                <div class="card" style="background-color: #fffd">
                    <div class="card-header">Betono labaratojija</div>
                    <div class="card-body">

                        @forelse ($mixingconcretes as $mixingconcrete)
                            @if (($mixingconcrete->delete === 0 
                                && preg_match('/^G/', $mixingconcrete->uzsakymo_nr) 
                                && $mixingconcrete->pagaminti_kubeliai_g > 0 
                                && count($mixingconcrete->labconcrete->where('mixing_concrete_id', $mixingconcrete->id)) >= 0))
                                    @php
                                        $existingCubesCount = $mixingconcrete->labconcrete()->where('pagaminti_kubeliai_g', $mixingconcrete->pagaminti_kubeliai_g)->count();
                                        $missingCubesCount = $mixingconcrete->pagaminti_kubeliai_g - $existingCubesCount;
                                        $color = 'red';
                                        $lastFixedDate = $mixingconcrete->created_at;
                                        $today = now();
                                        $daysSinceLastFixed = $today->diffInDays($lastFixedDate);
                                        if ($daysSinceLastFixed > 28) {
                                            $color = '#fff0';
                                        } elseif ($daysSinceLastFixed == 27) {
                                            $color = 'yellow';
                                        }
                                    @endphp
                                @if ($missingCubesCount > 0)
                                @for ($i = 0; $i < $missingCubesCount; $i++)
                                    {{-- @foreach ($labconcretes as $labconcrete)
                                        @if ($mixingconcrete->id != $labconcretes->mixing_concrete_id) --}}
                                        @if ($color == 'red')
                                            <table style="background-color: {{$color}}">
                                                <thead>
                                                    <tr>
                                                        <th colspan="34">Prie gaminio</th>
                                                    </tr>
                                                    <tr>
                                                        @foreach ($kubeliuBandimoZurnalasi1 as $kubeliuBandimoZurnalas1)
                                                        <th>{{ $kubeliuBandimoZurnalas1['label'] }}</th>
                                                        @endforeach
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <div class="form-group mb-3"><input type="hidden" class="form-control" value="{{ $mixingconcrete->id }}" placeholder="" name="mixing_concrete_id"></div>
                                                        <div class="form-group mb-3"><input type="hidden" class="form-control" value="{{ $mixingconcrete->pagaminti_kubeliai_g }}" placeholder="" name="pagaminti_kubeliai_g"></div>
                                                        <div class="form-group mb-3"><input type="hidden" class="form-control" value="" placeholder="" name="pagaminti_kubeliai_p"></div>
                                                        {{-- <div class="form-group mb-3"><input type="hidden" class="form-control" value="0" placeholder="" name="delete"></div> --}}
                                                        <div class="form-group mb-3"><input type="hidden" class="form-control" value="{{ Auth::user()->id }}" placeholder="" name="user_id"></div>
                                                        <td>{{ $mixingconcrete->created_at }}</td>
                                                        <td>{{ $mixingconcrete->marke }}</td>
                                                        <td>{{ $mixingconcrete->slankumo_klase }}</td>
                                                        <td></td>
                                                        <td>{{ $mixingconcrete->salcio_priedai }}</td>
                                                        <td>{{ $mixingconcrete->maisykle }}</td>
                                                        <td>{{ $mixingconcrete->uzsakymo_nr }}</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td>x</td>
                                                        <td></td>
                                                        <td>x</td>
                                                        <td>x</td>
                                                        <td>x</td>
                                                        <td></td>
                                                        <td>x</td>
                                                        <td>x</td>
                                                        <td>x</td>
                                                        <td>x</td>
                                                        <td>x</td>
                                                        <td>x</td>
                                                        <td>x</td>
                                                        <td>x</td>
                                                        <td>x</td>
                                                        <td>x</td>
                                                        <td>x</td>
                                                        <td>x</td>
                                                        <td>x</td>
                                                        <td>x</td>
                                                        <td>x</td>
                                                        <td>x</td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        @else
                                            <form action="{{route('labconcretes-store')}}" method="post">
                                                <table style="background-color: {{$color}}">
                                                    <thead>
                                                        <tr>
                                                            <th colspan="34">Prie gaminio</th>
                                                        </tr>
                                                        <tr>
                                                            @foreach ($kubeliuBandimoZurnalasi1 as $kubeliuBandimoZurnalas1)
                                                            <th>{{ $kubeliuBandimoZurnalas1['label'] }}</th>
                                                            @endforeach
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <div class="form-group mb-3"><input type="hidden" class="form-control" value="{{ $mixingconcrete->id }}" placeholder="" name="mixing_concrete_id"></div>
                                                            <div class="form-group mb-3"><input type="hidden" class="form-control" value="{{ $mixingconcrete->pagaminti_kubeliai_g }}" placeholder="" name="pagaminti_kubeliai_g"></div>
                                                            <div class="form-group mb-3"><input type="hidden" class="form-control" value="" placeholder="" name="pagaminti_kubeliai_p"></div>
                                                            {{-- <div class="form-group mb-3"><input type="hidden" class="form-control" value="0" placeholder="" name="delete"></div> --}}
                                                            <div class="form-group mb-3"><input type="hidden" class="form-control" value="{{ Auth::user()->id }}" placeholder="" name="user_id"></div>
                                                            <td>{{ $mixingconcrete->created_at }}</td>
                                                            <td>{{ $mixingconcrete->marke }}</td>
                                                            <td>{{ $mixingconcrete->slankumo_klase }}</td>
                                                            <td class="form-group mb-3"><input type="text" class="form-control" value="" placeholder="Slankumas, mm" name="slankumas_mm"></td>
                                                            <td>{{ $mixingconcrete->salcio_priedai }}</td>
                                                            <td>{{ $mixingconcrete->maisykle }}</td>
                                                            <td>{{ $mixingconcrete->uzsakymo_nr }}</td>
                                                            <td class="form-group mb-3"><input type="text" class="form-control" value="" placeholder="Bandinio plotis, mm" name="plotis_mm"></td>
                                                            <td class="form-group mb-3"><input type="text" class="form-control" value="" placeholder="Bandinio ilgis, mm" name="ilgis_mm"></td>
                                                            <td class="form-group mb-3"><input type="text" class="form-control" value="" placeholder="Bandinio aukštis, mm" name="aukstis_mm"></td>
                                                            <td>x</td>
                                                            <td class="form-group mb-3"><input type="text" class="form-control" value="" placeholder="Bandinio masė, g" name="bandinio_mase_g"></td>
                                                            <td>x</td>
                                                            <td>x</td>
                                                            <td>x</td>
                                                            <td class="form-group mb-3"><input type="text" class="form-control" value="" placeholder="Ardančioji jėga, kN" name="ardancioji_jega_kn"></td>
                                                            <td>x</td>
                                                            <td>x</td>
                                                            <td>x</td>
                                                            <td>x</td>
                                                            <td>x</td>
                                                            <td>x</td>
                                                            <td>x</td>
                                                            <td>x</td>
                                                            <td>x</td>
                                                            <td>x</td>
                                                            <td>x</td>
                                                            <td>x</td>
                                                            <td>x</td>
                                                            <td>x</td>
                                                            <td>x</td>
                                                            <td>x</td>
                                                            <td class="form-group mb-3"><input type="text" class="form-control" value="" placeholder="Aprašas" name="aprasas"></td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="34">
                                                                <button style="width: 98.5%" type="submit" class="btn btn-outline-primary m-1">Pridėti nauja kubelio testa</button>
                                                                {{-- <a href="{{ route('clients-index')}}" class="btn btn-secondary m-1">Atšaukti</a> --}}
                                                                @csrf
                                                                {{-- @method('put') --}}
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </form>
                                        @endif
                                        {{-- @endif
                                    @endforeach --}}
                                @endfor
                                @endif
                            @endif
                            
                            @if (($mixingconcrete->delete === 0 
                                && $mixingconcrete->pagaminti_kubeliai_p > 0 
                                && count($mixingconcrete->labconcrete->where('pagaminti_kubeliai_p', $mixingconcrete->pagaminti_kubeliai_p)) >= 0))
                                    @php
                                        $existingCubesCount = $mixingconcrete->labconcrete()->where('pagaminti_kubeliai_p', $mixingconcrete->pagaminti_kubeliai_p)->count();
                                        $missingCubesCount = $mixingconcrete->pagaminti_kubeliai_p - $existingCubesCount;
                                        $color = 'red';
                                        $lastFixedDate = $mixingconcrete->created_at;
                                        $today = now();
                                        $daysSinceLastFixed = $today->diffInDays($lastFixedDate);
                                        if ($daysSinceLastFixed > 28) {
                                            $color = '#fff0';
                                        } elseif ($daysSinceLastFixed == 27) {
                                            $color = 'yellow';
                                        }
                                    @endphp
                                @if ($missingCubesCount > 0)
                                @for ($i = 0; $i < $missingCubesCount; $i++)
                                @if ($color == 'red')
                                    <table style="background-color: {{$color}}">
                                        <thead>
                                            <tr>
                                                <th colspan="34">Vandenije</th>
                                            </tr>
                                            <tr>
                                                @foreach ($kubeliuBandimoZurnalasi1 as $kubeliuBandimoZurnalas1)
                                                <th>{{ $kubeliuBandimoZurnalas1['label'] }}</th>
                                                @endforeach
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <div class="form-group mb-3"><input type="hidden" class="form-control" value="{{ $mixingconcrete->id }}" placeholder="" name="mixing_concrete_id"></div>
                                                <div class="form-group mb-3"><input type="hidden" class="form-control" value="" placeholder="" name="pagaminti_kubeliai_g"></div>
                                                <div class="form-group mb-3"><input type="hidden" class="form-control" value="{{ $mixingconcrete->pagaminti_kubeliai_p }}" placeholder="" name="pagaminti_kubeliai_p"></div>
                                                {{-- <div class="form-group mb-3"><input type="hidden" class="form-control" value="0" placeholder="" name="delete"></div> --}}
                                                <div class="form-group mb-3"><input type="hidden" class="form-control" value="{{ Auth::user()->id }}" placeholder="" name="user_id"></div>
                                                <td>{{ $mixingconcrete->created_at }}</td>
                                                <td>{{ $mixingconcrete->marke }}</td>
                                                <td>{{ $mixingconcrete->slankumo_klase }}</td>
                                                <td></td>
                                                <td>{{ $mixingconcrete->salcio_priedai }}</td>
                                                <td>{{ $mixingconcrete->maisykle }}</td>
                                                <td>{{ $mixingconcrete->uzsakymo_nr }}</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>x</td>
                                                <td></td>
                                                <td>x</td>
                                                <td>x</td>
                                                <td>x</td>
                                                <td></td>
                                                <td>x</td>
                                                <td>x</td>
                                                <td>x</td>
                                                <td>x</td>
                                                <td>x</td>
                                                <td>x</td>
                                                <td>x</td>
                                                <td>x</td>
                                                <td>x</td>
                                                <td>x</td>
                                                <td>x</td>
                                                <td>x</td>
                                                <td>x</td>
                                                <td>x</td>
                                                <td>x</td>
                                                <td>x</td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                @else
                                    <form action="{{route('labconcretes-store')}}" method="post">
                                        <table style="background-color: {{$color}}">
                                            <thead>
                                                <tr>
                                                    <th colspan="34">Vandenije</th>
                                                </tr>
                                                <tr>
                                                    @foreach ($kubeliuBandimoZurnalasi1 as $kubeliuBandimoZurnalas1)
                                                    <th>{{ $kubeliuBandimoZurnalas1['label'] }}</th>
                                                    @endforeach
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <div class="form-group mb-3"><input type="hidden" class="form-control" value="{{ $mixingconcrete->id }}" placeholder="" name="mixing_concrete_id"></div>
                                                    <div class="form-group mb-3"><input type="hidden" class="form-control" value="" placeholder="" name="pagaminti_kubeliai_g"></div>
                                                    <div class="form-group mb-3"><input type="hidden" class="form-control" value="{{ $mixingconcrete->pagaminti_kubeliai_p }}" placeholder="" name="pagaminti_kubeliai_p"></div>
                                                    {{-- <div class="form-group mb-3"><input type="hidden" class="form-control" value="0" placeholder="" name="delete"></div> --}}
                                                    <div class="form-group mb-3"><input type="hidden" class="form-control" value="{{ Auth::user()->id }}" placeholder="" name="user_id"></div>
                                                    <td>{{ $mixingconcrete->created_at }}</td>
                                                    <td>{{ $mixingconcrete->marke }}</td>
                                                    <td>{{ $mixingconcrete->slankumo_klase }}</td>
                                                    <td class="form-group mb-3"><input type="text" class="form-control" value="" placeholder="Slankumas, mm" name="slankumas_mm"></td>
                                                    <td>{{ $mixingconcrete->salcio_priedai }}</td>
                                                    <td>{{ $mixingconcrete->maisykle }}</td>
                                                    <td>{{ $mixingconcrete->uzsakymo_nr }}</td>
                                                    <td class="form-group mb-3"><input type="text" class="form-control" value="" placeholder="Bandinio plotis, mm" name="plotis_mm"></td>
                                                    <td class="form-group mb-3"><input type="text" class="form-control" value="" placeholder="Bandinio ilgis, mm" name="ilgis_mm"></td>
                                                    <td class="form-group mb-3"><input type="text" class="form-control" value="" placeholder="Bandinio aukštis, mm" name="aukstis_mm"></td>
                                                    <td>x</td>
                                                    <td class="form-group mb-3"><input type="text" class="form-control" value="" placeholder="Bandinio masė, g" name="bandinio_mase_g"></td>
                                                    <td>x</td>
                                                    <td>x</td>
                                                    <td>x</td>
                                                    <td class="form-group mb-3"><input type="text" class="form-control" value="" placeholder="Ardančioji jėga, kN" name="ardancioji_jega_kn"></td>
                                                    <td>x</td>
                                                    <td>x</td>
                                                    <td>x</td>
                                                    <td>x</td>
                                                    <td>x</td>
                                                    <td>x</td>
                                                    <td>x</td>
                                                    <td>x</td>
                                                    <td>x</td>
                                                    <td>x</td>
                                                    <td>x</td>
                                                    <td>x</td>
                                                    <td>x</td>
                                                    <td>x</td>
                                                    <td>x</td>
                                                    <td>x</td>
                                                    <td class="form-group mb-3"><input type="text" class="form-control" value="" placeholder="Aprašas" name="aprasas"></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="34">
                                                        <button style="width: 98.5%" type="submit" class="btn btn-outline-primary m-1">Pridėti nauja kubelio testa</button>
                                                        {{-- <a href="{{ route('clients-index')}}" class="btn btn-secondary m-1">Atšaukti</a> --}}
                                                        @csrf
                                                        {{-- @method('put') --}}
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </form>
                                @endif
                                @endfor
                                @endif
                            @endif
                        @endforeach

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

@section('title', 'Betono maišymas')