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
            'label' => 'Markė',
            'type' => 'text',
            'name' => 'marke',
            'aprasas' => 'Betono Markė',
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
    $kubeliuBandimoZurnalasi1 = [
        [
            'label' => 'Laikimo vieta',
            'type' => 'text',
            'name' => 'pagaminti_kubeliai_g',
            'aprasas' => 'Laikimo vieta',
        ],
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
    ]
    ?>
    <div class="
    {{-- container --}}
    ">
    
        <div class="col-md-12 mb-4 maisimo_duonbaze">
            <div class="card" style="background-color: #fffd">
                <div class="card-header">Betono labaratorija</div>

                    <table>
                        <thead>
                            <tr>
                                @foreach ($kubeliuBandimoZurnalasi1 as $kubeliuBandimoZurnalas1)
                                <th>{{ $kubeliuBandimoZurnalas1['label'] }}</th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $vidutinisSerijosStiprisGiuzdant = '';
                                $bandinioStiprioMasyvas = [];
                                $bandinioMarkeMasyvas = [];
                            @endphp
                            @forelse ($labconcretes as $index => $labconcrete)
                            @php
                                $bandinioMarke = $labconcrete->mixingconcrete->marke;

                                $pagamintiKubeliai = ($labconcrete->pagaminti_kubeliai_g > 0) ?'Prie gaminio' :'Vandenije';
                                $fck = substr($labconcrete->mixingconcrete->marke, -2);
                                $fuc = (int)$fck;
                                $bandinioPlotas = $labconcrete->plotis_mm * $labconcrete->ilgis_mm;
                                $bandinioTuris = $bandinioPlotas * $labconcrete->aukstis_mm / 1000;
                                $pavedimoKoficientas = ($labconcrete->plotis_mm < 125) ? 0.95 : 1;
                                $bandinioStiprisGniuzdant = number_format($labconcrete->ardancioji_jega_kn / $bandinioPlotas * $pavedimoKoficientas * 1000, 2);
                                
                                $bandinioStiprioMasyvas[] = $bandinioStiprisGniuzdant;
                                $bandinioMarkeMasyvas[] = $bandinioMarke;
                                $vidutinisSerijosStiprisGiuzdant = 0;
                                if ($labconcrete->plotis_mm > 125) {
                                    // Tikrinimas, ar šis yra trečias elementas ar vėlesnis
                                    $vidutinisSerijosStiprisGiuzdant = ($index == 0) ? $bandinioStiprisGniuzdant : number_format(($bandinioStiprisGniuzdant + $bandinioStiprioMasyvas[$index - 1]) / 2, 2);
                                } elseif ($bandinioMarke == $bandinioMarkeMasyvas[$index - 1]) {
                                    $vidutinisSerijosStiprisGiuzdant = 1;
                                    // $vidutinisSerijosStiprisGiuzdant = ($index == 0) ? $bandinioStiprisGniuzdant : number_format(($bandinioStiprisGniuzdant + $bandinioStiprioMasyvas[$index - 1]) / 2, 2);
                                }

                                // $vidutinisSerijosStiprisGiuzdant = ($labconcrete->plotis_mm < 125) ?($labconcrete->plotis_mm == $labconcrete->plotis_mm) ?1 :'' :number_format($bandinioStiprisGniuzdant, 2);
                                $kriterijusV1 = ($fuc - 4);
                                $paliginimas1 = ($vidutinisSerijosStiprisGiuzdant !== '') ?($vidutinisSerijosStiprisGiuzdant >= $kriterijusV1) ?'≥' :'<' :'';
                                $fcm3 = ($vidutinisSerijosStiprisGiuzdant + $vidutinisSerijosStiprisGiuzdant + $vidutinisSerijosStiprisGiuzdant) / 3;
                                $kriterijusV2 = ($fuc + 4);
                                $paliginimas2 = ($fcm3 !== '') ?($fcm3 >= $kriterijusV2) ?'≥' :'<' :'';
                                $sigma35 = 1;
                                $fcm = $bandinioStiprisGniuzdant;
                                $sigma148 = ($fuc + 1.48 * $sigma35);
                                $paliginimas3 = ($fcm !== '') ?($fcm >= $sigma148) ?'≥' :'<' :'';
                                $vidKvadNuokripis036 = (0.36 * $sigma35);
                                $vidKvadNuokripis137 = (1.37 * $sigma35);
                            @endphp
                                <tr>
                                    {{-- <div class="form-group mb-3"><input type="hidden" class="form-control" value="{{ $mixingconcrete->id }}" placeholder="" name="mixing_concrete_id"></div> --}}
                                    {{-- <div class="form-group mb-3"><input type="hidden" class="form-control" value="0" placeholder="" name="delete"></div> --}}
                                    {{-- <td>{{ $labconcrete->user_maise_id }}</td> --}}
                                    <td>{{ $pagamintiKubeliai }}</td>
                                    <td>{{ $labconcrete->mixingconcrete->created_at }}</td>
                                    <td>{{ $labconcrete->mixingconcrete->marke }}</td>
                                    <td>{{ $labconcrete->mixingconcrete->slankumo_klase }}</td>
                                    <td>{{ $labconcrete->slankumas_mm }}</td>
                                    <td>{{ $labconcrete->mixingconcrete->salcio_priedai }}</td>
                                    <td>{{ $labconcrete->mixingconcrete->maisykle }}</td>
                                    <td>{{ $labconcrete->mixingconcrete->uzsakymo_nr }}</td>
                                    <td>{{ $labconcrete->plotis_mm }}</td>
                                    <td>{{ $labconcrete->ilgis_mm }}</td>
                                    <td>{{ $labconcrete->aukstis_mm }}</td>
                                    <td style="background-color: #bbb">{{ $bandinioPlotas }}</td>
                                    <td>{{ $labconcrete->ardancioji_jega_kn }}</td>
                                    <td style="background-color: #bbb">@if ( $labconcrete->plotis_mm < 125) 0,95 @else 1  @endif</td>
                                    <td>{{ $bandinioStiprisGniuzdant }}</td>
                                    <td>{{ $vidutinisSerijosStiprisGiuzdant }}</td>
                                    <td style="background-color: {{ $paliginimas1 == '≥' ?'default-color' :'#f66'}}">{{ $paliginimas1 }}</td>
                                    <td>{{ $kriterijusV1 }}</td>
                                    <td>{{ $fcm3 }}</td>
                                    <td style="background-color: {{ $paliginimas2 == '≥' ?'default-color' :'#f66'}}">{{ $paliginimas2 }}</td>
                                    <td>{{ $kriterijusV2 }}</td>
                                    <td>{{ $fcm }}</td>
                                    <td style="background-color: {{ $paliginimas3 == '≥' ?'default-color' :'#f66'}}">{{ $paliginimas3 }}</td>
                                    <td>{{ $sigma148 }}</td>
                                    <td>{{ $sigma35 }}</td>
                                    <td>{{ $vidKvadNuokripis036 }}</td>
                                    <td>x</td>
                                    <td>{{ $vidKvadNuokripis137 }}</td>
                                    <td>{{ $labconcrete->bandinio_mase_g }}</td>
                                    <td>{{ $bandinioTuris }}</td>
                                    <td>{{ number_format($labconcrete->bandinio_mase_g / $bandinioTuris, 2) }}</td>
                                    <td>x</td>
                                    <td>{{ $fck }}</td>
                                    <td>{{ $labconcrete->mixingconcrete->komentaras }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

    </div>
</div>
@endsection

@section('title', 'Maišymo duonbaze')