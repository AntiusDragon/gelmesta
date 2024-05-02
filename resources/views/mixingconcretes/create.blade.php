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
            'label' => 'Slankumas mm',
            'type' => 'text',
            'name' => 'slankumas_mm',
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
    $zimejimaiBukles = [
        [
            'zimejimas' => 'G',
        ],
        [
            'zimejimas' => 'P',
        ],
        [
            'zimejimas' => 'OBJ',
        ],
        [
            'zimejimas' => 'BAZ',
        ],
        [
            'zimejimas' => 'B',
        ],
    ];

    $zimejimaiMasivas = [];
    
    $filteredData = [];
    $maxYear = 0;
    $maxWeek = 0;
    foreach ($mixingconcretes as $mixingconcrete) {
        $created_at = \Carbon\Carbon::parse($mixingconcrete->created_at);
        $year = $created_at->year;
        $week = $created_at->weekOfYear;
    
        $maxYear = max($maxYear, $year);
        $maxWeek = max($maxWeek, $week);
    
        $key = $year . '-' . $week;
    
        if (!isset($filteredData[$key])) {
            $filteredData[$key] = [];
        }
    
        $filteredData[$key][] = $mixingconcrete;
    }
    
    $currentYear = $maxYear;
    $currentWeek = $maxWeek;
    
    $lastDayRecords = $mixingconcretes->filter(function ($record) {
        return $record->created_at->isToday();
    });
    
    $bendrasKiekis = 0;
    @endphp
    <div class="container">
        <div class="row justify-content-center">
    
            <div class="col-md-12 mb-4 pagaminti_kubeliai">
                <div class="card" style="background-color: #fffd">
                    <div class="card-header">Šios dienos maiškymo kiekis m3</div>

                    <div class="card-body">
                        <table>
                            <thead>
                                <tr>
                                    <th>Žimejimas</th>
                                    @foreach ($zimejimaiBukles as $zimejimaiBukle)
                                        @php
                                            $background_color = '#fff';
                                            foreach ($lastDayRecords as $mixingconcrete) {
                                                if ($mixingconcrete->delete === 0 && $mixingconcrete->uzsakymo_raide == $zimejimaiBukle['zimejimas']) {
                                                    $background_color = '#0f0';
                                                    break;
                                                }
                                            }
                                        @endphp
                                        <th class="form-group mb-3" style="background-color: {{ $background_color }}">
                                            {{ $zimejimaiBukle['zimejimas'] }}
                                        </th>
                                    @endforeach
                                    <th class="form-group mb-3" style="background-color: #fff">Bendras kiekis</th>
                                </tr>
                            </thead>
        
                            <tbody>
                                <tr>
                                    <td>Kiekis, m3</td>
                                    @foreach ($zimejimaiBukles as $zimejimaiBukle)
                                        @php
                                            $suma = 0;
                                        @endphp
                                        @foreach ($lastDayRecords as $mixingconcrete)
                                            @if ($mixingconcrete->delete === 0 && $mixingconcrete->uzsakymo_raide == $zimejimaiBukle['zimejimas'])
                                                @php
                                                    $suma += $mixingconcrete->kiekis_m3;
                                                    $bendrasKiekis += $mixingconcrete->kiekis_m3;
                                                @endphp
                                            @endif
                                        @endforeach
                                        <td>{{ $suma }}</td>
                                    @endforeach
                                    <td>{{ $bendrasKiekis }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    
            <div class="col-md-12 mb-4 pagaminti_kubeliai">
                <div class="card" style="background-color: #fffd">
                    <div class="card-header">Pagaminti kubeliai</div>

                    <div class="card-body">
                        <table>
                            <thead>
                                    <tr>
                                        <th>Gamyba+XF/F</th>
                                        @foreach ($kubeliuMerkeFormos1 as $kubeliuMerkeForma1)
                                            @php
                                                $background_color = '#fff';
                                                foreach ($filteredData as $yearWeek => $weekData) {
                                                    [$year, $week] = explode('-', $yearWeek);
                                        
                                                    if ($year == $currentYear && $week == $currentWeek) {
                                                        foreach ($weekData as $mixingconcrete) {
                                                            
                                                            if ($mixingconcrete->delete === 0 && $mixingconcrete->marke === $kubeliuMerkeForma1['label'] && preg_match('/^G/', $mixingconcrete->uzsakymo_nr) && $mixingconcrete->salcio_priedai !== null) {
                                                                $background_color = 'red';
                                        
                                                                foreach ($weekData as $mixingconcrete) {
                                                                    if ($mixingconcrete->delete === 0 && $mixingconcrete->marke === $kubeliuMerkeForma1['label'] && preg_match('/^G/', $mixingconcrete->uzsakymo_nr) && $mixingconcrete->salcio_priedai !== null && $mixingconcrete->pagaminti_kubeliai_g > 0) {
                                                                        $background_color = '#0F0';
                                                                    }
                                                                }
                                        
                                                                break 2;
                                                            }
                                                        }
                                                    }
                                                }
                                            @endphp
                                            <th class="form-group mb-3" style="background-color: {{ $background_color }}">
                                                {{ $kubeliuMerkeForma1['label'] }}
                                            </th>
                                        @endforeach
                                    </tr>
                                    
                                    <tr>
                                        <th>Pardavimai+XF/F</th>
                                        @foreach ($kubeliuMerkeFormos1 as $kubeliuMerkeForma1)
                                            @php
                                                $background_color = '#fff';
                                                foreach ($filteredData as $yearWeek => $weekData) {
                                                    [$year, $week] = explode('-', $yearWeek);
                                        
                                                    if ($year == $currentYear && $week == $currentWeek) {
                                                        foreach ($weekData as $mixingconcrete) {
                                                            
                                                            if ($mixingconcrete->delete === 0 && $mixingconcrete->marke === $kubeliuMerkeForma1['label'] && $mixingconcrete->salcio_priedai !== null) {
                                                                $background_color = 'red';
                                        
                                                                foreach ($weekData as $mixingconcrete) {
                                                                    if ($mixingconcrete->delete === 0 && $mixingconcrete->marke === $kubeliuMerkeForma1['label'] && $mixingconcrete->salcio_priedai !== null && $mixingconcrete->pagaminti_kubeliai_p > 0) {
                                                                        $background_color = '#0F0';
                                                                    }
                                                                }
                                        
                                                                break 2;
                                                            }
                                                        }
                                                    }
                                                }
                                            @endphp
                                            <th class="form-group mb-3" style="background-color: {{ $background_color }}">
                                                {{ $kubeliuMerkeForma1['label'] }}
                                            </th>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <th>Gamyba</th>
                                        @foreach ($kubeliuMerkeFormos1 as $kubeliuMerkeForma1)
                                            @php
                                                $background_color = '#fff';
                                                foreach ($filteredData as $yearWeek => $weekData) {
                                                    [$year, $week] = explode('-', $yearWeek);
                                        
                                                    if ($year == $currentYear && $week == $currentWeek) {
                                                        foreach ($weekData as $mixingconcrete) {
                                                            
                                                            if ($mixingconcrete->delete === 0 && $mixingconcrete->marke === $kubeliuMerkeForma1['label'] && preg_match('/^G/', $mixingconcrete->uzsakymo_nr) && $mixingconcrete->salcio_priedai == null) {
                                                                $background_color = 'red';
                                        
                                                                foreach ($weekData as $mixingconcrete) {
                                                                    if ($mixingconcrete->delete === 0 && $mixingconcrete->marke === $kubeliuMerkeForma1['label'] && preg_match('/^G/', $mixingconcrete->uzsakymo_nr) && $mixingconcrete->salcio_priedai == null && $mixingconcrete->pagaminti_kubeliai_g > 0) {
                                                                        $background_color = '#0F0';
                                                                    }
                                                                }
                                        
                                                                break 2;
                                                            }
                                                        }
                                                    }
                                                }
                                            @endphp
                                            <th class="form-group mb-3" style="background-color: {{ $background_color }}">
                                                {{ $kubeliuMerkeForma1['label'] }}
                                            </th>
                                        @endforeach
                                    </tr>
        
                                    <tr>
                                        <th>Pardavimai</th>
                                        @foreach ($kubeliuMerkeFormos1 as $kubeliuMerkeForma1)
                                            @php
                                                $background_color = '#fff';
                                                foreach ($filteredData as $yearWeek => $weekData) {
                                                    [$year, $week] = explode('-', $yearWeek);
                                        
                                                    if ($year == $currentYear && $week == $currentWeek) {
                                                        foreach ($weekData as $mixingconcrete) {
                                                            
                                                            if ($mixingconcrete->delete === 0 && $mixingconcrete->marke === $kubeliuMerkeForma1['label'] && $mixingconcrete->salcio_priedai == null) {
                                                                $background_color = 'red';
                                        
                                                                foreach ($weekData as $mixingconcrete) {
                                                                    if ($mixingconcrete->delete === 0 && $mixingconcrete->marke === $kubeliuMerkeForma1['label'] && $mixingconcrete->salcio_priedai == null && $mixingconcrete->pagaminti_kubeliai_p > 0) {
                                                                        $background_color = '#0F0';
                                                                    }
                                                                }
                                        
                                                                break 2;
                                                            }
                                                        }
                                                    }
                                                }
                                            @endphp
                                            <th class="form-group mb-3" style="background-color: {{ $background_color }}">
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
                    </div>
                </div>
            </div>
    
            <div class="col-md-12 mb-4 naujas_maisimas">
                <div class="card" style="background-color: #fffd">
                    <div class="card-header">Naujas maišymas</div>
    
                    <form action="{{route('mixingconcretes-store')}}" method="post">
                        <table>
                            <thead>
                                <tr>
                                    @foreach ($createMixingConcretesFormos1 as $createMixingConcretesForma1)
                                    <th>{{ $createMixingConcretesForma1['label'] }}</th>
                                    @endforeach
                                    <th>Būklė</th>
                                    <th>Užsakovas</th>
                                    <th>Komentaras</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <div class="form-group mb-3"><input type="hidden" class="form-control" value="0" placeholder="" name="delete"></div>
                                    <td class="form-group mb-3"><input type="text" class="form-control" value="" placeholder="Maišykles ID" name="maisikles_id"></td>
                                    <div class="form-group mb-3"><input type="hidden" class="form-control" value="0" placeholder="" name="maisikles_recepto_id"></div>
                                    <div class="form-group mb-3"><input type="hidden" class="form-control" value="0" placeholder="" name="user_maise_id"></div>
                                    <div class="form-group mb-3"><input type="hidden" class="form-control" value="0" placeholder="" name="user_edit_id"></div>
                                    <td class="form-group mb-3"><input type="text" class="form-control" value="{{ old('marke') ? strtoupper(old('marke')) : '' }}" placeholder="Marke" name="marke"></td>
                                    <td class="form-group mb-3"><input type="text" class="form-control" value="{{ ucwords(old('slankumo_klase')) }}" placeholder="Slankumas" name="slankumo_klase"></td>
                                    <td class="form-group mb-3"><input type="text" class="form-control" value="{{ ucwords(old('slankumas_mm')) }}" placeholder="Slankumas mm" name="slankumas_mm"></td>
                                    <td class="form-group mb-3"><input type="text" class="form-control" value="{{ strtolower(old('tipas')) }}" placeholder="Typas" name="tipas"></td>
                                    <td class="form-group mb-3"><input type="text" class="form-control" value="{{ ucwords(old('salcio_priedai')) }}" placeholder="XF / F" name="salcio_priedai"></td>
                                    <td class="form-group mb-3"><input type="text" class="form-control" value="" placeholder="Pagaminti kubeliai &quot;G&quot; vnt." name="pagaminti_kubeliai_g"></td>
                                    <td class="form-group mb-3"><input type="text" class="form-control" value="" placeholder="Pagaminti kubeliai &quot;P&quot; vnt." name="pagaminti_kubeliai_p"></td>
                                    <td class="form-group mb-3"><input type="text" class="form-control" value="" placeholder="Maišyklė" name="maisykle"></td>
                                    <td class="form-group mb-3"><input type="text" class="form-control" value="{{ str_replace(',', '.', old('kiekis_m3')) }}" placeholder="Kiekis, m3" name="kiekis_m3"></td>
                                    <td class="form-group mb-3"><input type="text" class="form-control" value="{{ ucwords(old('uzsakymo_nr')) }}" placeholder="Užsakymo Nr" name="uzsakymo_nr"></td>
                                    <td class="form-group mb-3"><input type="text" class="form-control" value="{{ ucwords(old('uzsakymo_raide')) }}" placeholder="Bukle" name="uzsakymo_raide"></td>
                                    <td class="form-group mb-3"><input type="text" class="form-control" value="" placeholder="Užsakovas" name="uzsakovas"></td>
                                    <td class="form-group mb-3"><input type="text" class="form-control" value="" placeholder="Komentaras" name="komentaras"></td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="btn_centras">
                            <button style="width: 98.5%" type="submit" class="btn btn-outline-primary m-1">Pridėti nauja maišyma</button>
                            {{-- <a href="{{ route('clients-index')}}" class="btn btn-secondary m-1">Atšaukti</a> --}}
                            @csrf
                            {{-- @method('put') --}}
                        </div>
                    </form>
    
                    </div>
                </div>
            </div>
    
            <div class="col-md-12 maisimo_duonbaze">
                <div class="card" style="background-color: #fffd">
                    <div class="card-header">Maišymo duomenis</div>

                    <form action="{{route('mixingconcretes-create')}}">
                        <div class="container">
                            <div class="row">
                                <div class="col-3">
                                    <div class="form-group mb-3">
                                       <label class="m-1">Rūšiavimas</label>
                                       <select class=" form-select" name="sort">
                                            @foreach ($sorts as $sortKey => $sortValue)
                                            <option value=" {{ $sortKey }}" 
                                                @if ($sortBy == $sortKey) selected @endif>
                                                {{ $sortValue }}</option>
                                            @endforeach
                                       </select>
                                    </div>
                                </div>
                                
                                <div class="col-2">
                                    <div class="form-group mb-3">
                                       <label class="m-1">Ieškoti maišimo</label>
                                       <input type="text" class="form-control" name="s" value="{{ $s }}">
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group mb-3">
                                        <button type="submit" class="btn btn-primary mt-4">Rodyti</button>
                                        <a href="{{route('mixingconcretes-create')}}" 
                                            class="btn  btn-secondary mt-4 ms-2">Padinis</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>
    
                    <div class="card-body">
    
                        <table>
                            <thead>
                                <tr>
                                    <th>Maišymo data</th>
                                    @foreach ($createMixingConcretesFormos1 as $createMixingConcretesForma1)
                                    <th>{{ $createMixingConcretesForma1['label'] }}</th>
                                    @endforeach
                                    <th>Būklė</th>
                                    <th>Užsakovas</th>
                                    <th>Komentaras</th>
                                    <th>Veiksmai</th>
                                </tr>
                            </thead>
        
                            <tbody>
                                @php
                                    // $lastDayRecords = $mixingconcretes->filter(function ($record) {
                                    //     return $record->created_at->isToday();
                                    // });
                                @endphp

                                @forelse ($lastDayRecords as $mixingconcrete)
                                {{-- @if ($mixingconcrete->delete == '0') --}}
                                <tr>
                                    <td>{{ $mixingconcrete->created_at }}</td>
                                    @foreach ($createMixingConcretesFormos1 as $createMixingConcretesForma1)
                                    <td>{{ $mixingconcrete->{ $createMixingConcretesForma1['name'] } }}</td>
                                    @endforeach
                                    <td>{{ $mixingconcrete->uzsakymo_raide }}</td>
                                    <td>{{ $mixingconcrete->uzsakovas }}</td>
                                    <td>{{ $mixingconcrete->komentaras }}</td>
    
                                    <td>
                                        <a href="{{route('mixingconcretes-edit', $mixingconcrete)}}" class="btn btn-success m-1">Redaguoti</a>
                                        {{-- <a href="{{route('mixingconcretes-delete', $mixingconcrete)}}" class="btn btn-danger m-1">Trinti</a> --}}
                                        <a href="{{route('mixingconcretes-show', $mixingconcrete)}}" class="btn btn-secondary m-1">Peržiūrėti</a>
                                    </td>
    
                                </tr>
                                {{-- @endif --}}
                                @empty
                                <tr>
                                    <td colspan="15">Maišimų nėra</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
    
                    </div>
                </div>
            </div>
            {{-- @if ($perPage)
            <div class="mt-3">  
                {{ $mixingconcretes->links() }}
            </div>
            @endif --}}
    
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const fields = document.querySelectorAll('.form-control'); // Rinkiami visi formos laukeliai

        fields.forEach((field, index) => {
            field.addEventListener('keydown', function (event) {
                if (event.key === 'ArrowLeft') { // Jei paspaustas kairysis rodyklės klavišas
                    if (index > 0) { // Tikrinama, ar nesame pirmame laukelyje
                        fields[index - 1].focus(); // Perkeliamas fokusas į ankstesnį laukelį
                        event.preventDefault(); // Sustabdomas įprastas naršyklės elgsena
                    }
                } else if (event.key === 'ArrowRight') { // Jei paspaustas dešinysis rodyklės klavišas
                    if (index < fields.length - 1) { // Tikrinama, ar nesame paskutiniame laukelyje
                        fields[index + 1].focus(); // Perkeliamas fokusas į kitą laukelį
                        event.preventDefault(); // Sustabdomas įprastas naršyklės elgsena
                    }
                }
            });
        });
    });
</script>
@endsection

@section('title', 'Betono maišymas')