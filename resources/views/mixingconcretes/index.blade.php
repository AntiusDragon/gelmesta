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
    ?>
    <div class="container">
        <div class="row justify-content-center maisimo_duonbaze">
            <div class="col-md-12">
                <div class="card" style="background-color: #fffd">
                    <div class="card-header">Maišymo duomenis</div>

                    <form action="">
                        <div class="container">
                            <div class="row">
                                <div class="col-3">
                                    <div class="form-group mb-3">
                                       <label class="m-1">Rūšiavimas</label>
                                       <select class=" form-select" name="sort">
                                            @foreach ($sorts as $sortKey => $sortValue)
                                            <option value="{{ $sortKey }}" 
                                                @if ($sortBy == $sortKey) selected @endif>
                                                {{ $sortValue }}</option>
                                            @endforeach
                                       </select>
                                    </div>
                                </div>
                                
                                <div class="col-2">
                                    <div class="form-group mb-3">
                                       <label class="m-1">Rodyti puslapyjė rezultatų</label>
                                       <select class="form-select" name="per_page">
                                            @foreach ($perPageSelect as $perPageKey => $perPageValue)
                                            <option value="{{ $perPageKey }}" 
                                                @if ($perPage == $perPageKey) selected @endif
                                                >{{ $perPageValue }}</option>
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
                                        <a href="{{  route('mixingconcretes-index') }}" 
                                            class="btn  btn-secondary mt-4 ms-2">Padinis</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>
    
                    <div class="card-body">
                        <div>
                            <a href="{{ route('mixingconcretes-create') }}" class="btn btn-success">Pridėti nauja maišyma</a>
                        </div>
    
                        <table>
                            <thead>
                                <tr>
                                    @foreach ($createMixingConcretesFormos1 as $createMixingConcretesForma1)
                                    <th>{{ $createMixingConcretesForma1['label'] }}</th>
                                    @endforeach
                                    <th>Bukle</th>
                                    <th>Užsakovas</th>
                                    <th>Komentaras</th>
                                    <th>Veiksmai</th>
                                </tr>
                            </thead>
        
                            <tbody>
                                @forelse ($mixingconcretes as $mixingconcrete)
                                @if ($mixingconcrete->delete == '0')
                                <tr>
                                    @foreach ($createMixingConcretesFormos1 as $createMixingConcretesForma1)
                                    <td>{{ $mixingconcrete->{ $createMixingConcretesForma1['name'] } }}</td>
                                    @endforeach
                                    <td>{{ $mixingconcrete->uzsakymo_raide }}</td>
                                    <td>{{ $mixingconcrete->uzsakovas }}</td>
                                    <td>{{ $mixingconcrete->komentaras }}</td>
    
                                    <td>
                                        <a href="{{ route('mixingconcretes-edit', $mixingconcrete)}}" class="btn btn-success m-1">Redaguoti</a>
                                        {{-- <a href="{{ route('mixingconcretes-delete', $mixingconcrete)}}" class="btn btn-danger m-1">Trinti</a> --}}
                                        <a href="{{ route('mixingconcretes-show', $mixingconcrete)}}" class="btn btn-secondary m-1">Peržiūrėti</a>
                                    </td>
    
                                </tr>
                                @endif
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
            @if ($perPage)
            <div class="mt-3">  
                {{ $mixingconcretes->links() }}
            </div>
            @endif
        </div>
    </div>
</div>
@endsection

@section('title', 'Maišymo duonbaze')